<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

//rutas de prueba
Route::resource('pruebas', App\Http\Controllers\PruebasController::class);
Route::get('pagination/fetch_data', [App\Http\Controllers\PruebasController::class, 'fetch_data'])->name('fetch_data');
Route::get('prueba/form', [App\Http\Controllers\PruebasController::class, 'prueba'])->name('pruebaForm');

Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Auth::routes();
//incio de populars

Route::get('/populars', [App\Http\Controllers\PopularsController::class, 'populars'])->name('populars');

Route::get('/populars_seinen', [App\Http\Controllers\PopularsController::class, 'popularsSeinen'])->name('popularsSeinen');

Route::get('/populars_josei', [App\Http\Controllers\PopularsController::class, 'popularsJosei'])->name('popularsJosei');
//fin de populars

Route::get('/latest_episodes', [App\Http\Controllers\NewEpisodesController::class, 'newEpisodes'])->name('newEpisodes');

//incio de manga
Route::get('/library/manga/{manga}', [App\Http\Controllers\MangaController::class, 'show'])->name('mangaShow');

Route::get('/librar/manga/vote_manga', [App\Http\Controllers\MangaController::class, 'voteManga'])->name('mangaVoteManga');

Route::get('/librar/manga/change_item_pending', [App\Http\Controllers\MangaController::class, 'changeItemPending'])->name('mangaChangeItemPending');

//fin de manga

//incio de view de episode
Route::get('/viewer/{episode_group}/paginated', [App\Http\Controllers\ViewEpisodeController::class, 'paginate'])->name('viewPaginate');

Route::get('/viewer/{episode_group}/cascade', [App\Http\Controllers\ViewEpisodeController::class, 'cascade'])->name('viewCascade');
//fin de view de episode

//incio de items pending
Route::get('/items_pending/{itemsPending}', [App\Http\Controllers\ProfileController::class, 'itemsPending'])->name('itemsPending');
//fin de items pending

//incio de profile
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');

Route::get('/profile/groups/', [App\Http\Controllers\ProfileController::class, 'profileMyGroups'])->name('profileMyGroups');

Route::get('/profile/groups_following/', [App\Http\Controllers\ProfileController::class, 'profileGroupsFollow'])->name('profileGroupsFollow');

Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'profileEdit'])->name('profileEdit');

Route::get('/profile/{item}', [App\Http\Controllers\ProfileController::class, 'profileItemFollow'])->name('profileItemFollow');

Route::post('/profile/create_group', [App\Http\Controllers\ProfileController::class, 'profileCreateGroup'])->name('profileCreateGroup');

Route::post('/profile/update_profile', [App\Http\Controllers\ProfileController::class, 'profileUpdate'])->name('profileUpdate');

Route::post('/profile/update_pass', [App\Http\Controllers\ProfileController::class, 'profileUpdatePass'])->name('profileUpdatePass');

//fin de profile

//incio de profile de usuario
Route::get('/users/{user}/{url}', [App\Http\Controllers\ProfileController::class, 'profileUser'])->name('profileUser');

Route::get('/users/{user}/{url}/groups/', [App\Http\Controllers\ProfileController::class, 'profileUserMyGroups'])->name('profileUserMyGroups');

Route::get('/users/{user}/{url}/groups_following/', [App\Http\Controllers\ProfileController::class, 'profileUserGroupsFollow'])->name('profileUserGroupsFollow');

Route::get('/users/{user}/{url}/{item}', [App\Http\Controllers\ProfileController::class, 'profileUserItemFollow'])->name('profileUserItemFollow');


//fin de profile de un usuario

//incio de groups

Route::get('/follow_group', [App\Http\Controllers\GroupController::class, 'followUserGroup'])->name('followUserGroup');

Route::get('/groups/{group}', [App\Http\Controllers\GroupController::class, 'group'])->name('groupShow');

Route::get('/groups/{group}/proyects', [App\Http\Controllers\GroupController::class, 'groupProyects'])->name('groupProyects');

Route::get('/list_proyects_group', [App\Http\Controllers\GroupController::class, 'listProyectsGroup'])->name('listProyectsGroup');

//fin de groups

//inicio de buscador
Route::get('/library', [App\Http\Controllers\BuscadorController::class, 'buscador'])->name('buscador');

Route::get('/library/list', [App\Http\Controllers\BuscadorController::class, 'buscadorList'])->name('buscadorList');

//fin de buscador

//inicio de buscadorGroup
Route::get('/groups', [App\Http\Controllers\BuscadorGroupController::class, 'buscadorGroup'])->name('buscadorGroup');

Route::get('/groups/list', [App\Http\Controllers\BuscadorGroupController::class, 'buscadorListGroup'])->name('buscadorListGroup');

//fin de buscadorGroup
