<?php

use App\Http\Controllers\Controller;
use App\Models\Clothes;
use App\Models\User;

class AdminController extends Controller
{
    public function indexUsers(Request $request)
    {
        $search = $request->input('search');
        $searchBy = in_array($request->input('search_by'), ['name', 'email']) ? $request->input('search_by') : 'name';
        $role = $request->input('role');
        $sortBy = in_array($request->input('sort_by'), ['id', 'name', 'email']) ? $request->input('sort_by') : 'id';
        $sort = in_array($request->input('sort'), ['asc', 'desc']) ? $request->input('sort') : 'desc';
        $perPage = in_array($request->input('per_page'), [10, 25, 50, 100]) ? $request->input('per_page') : config('settings.paginate');

        $users = User::withTrashed()
            ->when($search, function ($query) use ($search, $searchBy) {
                if ($searchBy == 'email') {
                    return $query->searchEmail($search);
                }
                return $query->searchName($search);
            })
            ->when(isset($role) && is_numeric($role), function ($query) use ($role) {
                return $query->ofRole($role);
            })
            ->orderBy($sortBy, $sort)
            ->paginate($perPage)
            ->appends(['search' => $search, 'search_by' => $searchBy, 'role' => $role, 'sort_by' => $sortBy, 'sort' => $sort, 'per_page' => $perPage]);


        return view('admin.container', ['view' => 'admin.users.list', 'users' => $users]);
    }

    public function editUser($id)
    {
        $user = User::withTrashed()
            ->where('id', $id)
            ->firstOrFail();

        return view('admin.container', ['view' => 'account.profile', 'user' => $user]);
    }

    // Delete user completly
    public function destroyUser(Request $request, $id)
    {
        $user = User::withTrashed()->findOrFail($id);

        if ($request->user()->id == $user->id && $user->role == "user") {
            return redirect()->route('admin.users.edit', $id)->with('error', __('Operation denied.'));
        }

        $user->forceDelete();

        return redirect()->route('admin.users')->with('success', __(':name has been deleted.', ['name' => $user->name]));
    }

    /**
     * Soft delete the User.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function disableUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if ($request->user()->id == $user->id && $user->role == "user") {
            return redirect()->route('admin.users', $id)->with('error', __('Operation denied.'));
        }

        $user->delete();
        return redirect()->route('admin.users', $id)->with('success', __('Settings saved.'));
    }

    /**
     * Restore the soft deleted User.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restoreUser($id)
    {
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();

        return redirect()->route('admin.users', $id)->with('success', __('Settings saved.'));
    }

    public function indexClothes(Request $request)
    {
        $search = $request->input('search');
        $searchBy = in_array($request->input('search_by'), ['name', 'description']) ? $request->input('search_by') : 'name';
        $category = $request->input('category');
        $sortBy = in_array($request->input('sort_by'), ['id', 'name', 'description']) ? $request->input('sort_by') : 'id';
        $sort = in_array($request->input('sort'), ['asc', 'desc']) ? $request->input('sort') : 'desc';
        $perPage = in_array($request->input('per_page'), [10, 25, 50, 100]) ? $request->input('per_page') : config('settings.paginate');

        $clothes = Clothes::withTrashed()
            ->when($search, function ($query) use ($search, $searchBy) {
                if ($searchBy == 'description') {
                    return $query->searchDescription($search);
                }
                return $query->searchName($search);
            })
            ->when(isset($category) && is_numeric($category), function ($query) use ($category) {
                return $query->ofCategory($category);
            })
            ->orderBy($sortBy, $sort)
            ->paginate($perPage)
            ->appends(['search' => $search, 'search_by' => $searchBy, 'category' => $category, 'sort_by' => $sortBy, 'sort' => $sort, 'per_page' => $perPage]);

        return view('admin.container', ['view' => 'admin.clothes.list', 'clothes' => $clothes]);
    }

    public function editClothes($id)
    {
        $clothes = Clothes::withTrashed()
            ->where('id', $id)
            ->firstOrFail();

        return view('admin.container', ['view' => 'clothes.edit', 'clothes' => $clothes]);
    }

    // Delete clothes completly
    public function destroyClothes(Request $request, $id)
    {
        $clothes = Clothes::withTrashed()->findOrFail($id);

        $clothes->forceDelete();

        return redirect()->route('admin.clothes')->with('success', __(':name has been deleted.', ['name' => $clothes->name]));
    }

    /**
     * Soft delete the Clothes.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function disableClothes(Request $request, $id)
    {
        $clothes = Clothes::findOrFail($id);

        $clothes->delete();
        return redirect()->route('admin.clothes')->with('success', __('Settings saved.'));
    }
}
