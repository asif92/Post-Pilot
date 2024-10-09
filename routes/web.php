<?php


use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\BudgetController;

use App\Models\User;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// dd(Auth::User());


Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/user_dashboard', [UserController::class, 'user_dashboard'])->name('user_dashboard');

// Legals Tab start
Route::get('/contracts', [LegalController::class, 'contracts'])->name('contracts');
Route::get('/contracts/{slug}', [LegalController::class, 'contract'])->name('contract');
// Legals Tab end

// Sales Tab start
Route::get('/sales_dashboard', [SaleController::class, 'sales_dashboard'])->name('sales_dashboard');
Route::get('/sales_pipeline', [SaleController::class, 'pipeline'])->name('pipeline');
Route::get('/sales_campaigns', [SaleController::class, 'campaigns'])->name('campaigns');
Route::get('/sales_forms', [SaleController::class, 'forms'])->name('forms');


// Sales Tab end

// Social Media Tab start
Route::get('/social_media_analytics', [SocialMediaController::class, 'analytics'])->name('analytics');
Route::get('/social_media_settings', [SocialMediaController::class, 'settings'])->name('settings');
Route::get('/social_media_planning', [SocialMediaController::class, 'planning'])->name('planning');
Route::get('/social_media_inbox', [SocialMediaController::class, 'inbox'])->name('inbox');
// Social Media Tab end

// Budgets Tab start
Route::get('/budget_dashboard', [BudgetController::class, 'budget_dashboard'])->name('budget_dashboard');
Route::get('/budget_operations', [BudgetController::class, 'operations'])->name('operations');
Route::get('/budget_payroll', [BudgetController::class, 'payroll'])->name('payroll');
Route::get('/payroll_detail/{slug}', [BudgetController::class, 'payroll_detail'])->name('payroll_detail');
// Budgets Tab end
    
    
    








    
    
    


// BrandController
Route::get('/brand_workspaces/{slug}', [BrandController::class, 'brand_workspaces'])->name('brand_workspaces');
Route::get('/brand_dashboard/{slug}', [BrandController::class, 'brand_dashboard'])->name('brand_dashboard');
Route::get('/edit_brand/{slug}', [BrandController::class, 'edit_brand'])->name('edit_brand');
Route::Post('/edit_brand', [BrandController::class, 'save_edit_brand'])->name('save_edit_brand');
Route::Post('/set_brand_session', [BrandController::class, 'set_brand_session'])->name('set_brand_session');
Route::Post('/brands', [BrandController::class, 'save_brand'])->name('save_brand');

// end of BrandController


// Workspace
Route::get('/workspace/{slug}/{id}', [WorkspaceController::class, 'workspace'])->name('workspace');
Route::Post('/workspace', [WorkspaceController::class, 'save_workspace'])->name('save_workspace');
Route::Post('/join_workspace', [WorkspaceController::class, 'join_workspace'])->name('join_workspace');
Route::Post('/delete_workspace', [WorkspaceController::class, 'delete_workspace'])->name('delete_workspace');
Route::Post('/exit_workspace', [WorkspaceController::class, 'exit_workspace'])->name('exit_workspace');
Route::get('/edit_workspace/{slug}', [WorkspaceController::class, 'edit_workspace'])->name('edit_workspace');
Route::Post('/edit_workspace', [WorkspaceController::class, 'save_edit_workspace'])->name('save_edit_workspace');
// end workspace

// board
Route::get('/board/{slug}/{workspace_id}', [BoardController::class, 'board'])->name('board');
Route::Post('/board', [BoardController::class, 'save_board'])->name('save_board');


// within a board there are lists
Route::Post('/add_list', [Card_listController::class, 'add_list'])->name('add_list');
Route::Post('/rename_list_title', [Card_listController::class, 'rename_list_title'])->name('rename_list_title');
Route::Post('/delete_list', [Card_listController::class, 'delete_list'])->name('delete_list');
Route::Post('/update_list_position', [Card_listController::class, 'update_list_position'])->name('update_list_position');
// list end 
// within board there are cards 
Route::Post('/add_card', [CardController::class, 'add_card'])->name('add_card');
Route::Post('/card_movement', [CardController::class, 'card_movement'])->name('card_movement');
Route::Post('/save_description', [CardController::class, 'save_description'])->name('save_description');
Route::Post('/save_comment', [CardController::class, 'save_comment'])->name('save_comment');
Route::Post('/delete_image', [CardController::class, 'delete_image'])->name('delete_image');
Route::Post('/delete_comment', [CardController::class, 'delete_comment'])->name('delete_comment');
Route::Post('/delete_card', [CardController::class, 'delete_card'])->name('delete_card');
Route::Post('/save_date', [CardController::class, 'save_date'])->name('save_date');
Route::Post('/remove_date', [CardController::class, 'remove_date'])->name('remove_date');
Route::Post('/save_attachment', [CardController::class, 'save_attachment'])->name('save_attachment');
Route::Post('/fetch_attachment', [CardController::class, 'fetch_attachment'])->name('fetch_attachment');
Route::Post('/fetch_comment', [CardController::class, 'fetch_comment'])->name('fetch_comment');
Route::Post('/delete_image_card', [CardController::class, 'delete_image_card'])->name('delete_image_card');

// cards ends
// board



// }












 



 });