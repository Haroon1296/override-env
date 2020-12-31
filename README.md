// Routes ...

Route::get('/smtp-settings', 'admin\BusinessSettingsController@smtp_settings')->name('smtp_settings.index');
Route::post('/env_key_update', 'admin\BusinessSettingsController@env_key_update')->name('env_key_update.update');
