<?php
use App\Models\Post;
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
/* Home Routes */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/beta', 'HomeController@beta')->name('beta');
Route::get('/', 'LinkController@index')->name('welcome');
Route::get('P5_Sketches/pages/p5js', 'P5_SketchController@p5js')->name('P5_Sketches/pages/p5js');

/* Family Tree routes */
Route::get('/stone/index', 'StoneController@index')->name('stone/index');
Route::get('/stone/pages/timeline', 'StoneController@timeline')->name('stone/pages/timeline');
Route::get('/stone/pages/map', 'StoneController@map')->name('stone/pages/map');
Route::get('/stone/pages/tree', 'StoneController@tree')->name('stone/pages/tree');
Route::get('/stone/pages/{id}', ['uses'=> 'StoneController@getPerson']);
Route::get('/stone/person_index', 'StoneController@person_index')->name('stone/person_index');
Route::post('/stone/store', 'StoneController@store')->name('stone.store');
Route::get('/stone/add_tree', 'StoneController@add_tree')->name('stone/add_tree');
/* Weather API Routes */
Route::get('/github/{username}', 'ApiController@github')->name('github');
Route::get('/weather', 'ApiController@getWeather')->name('weather');
Route::get('/weather/js', 'ApiController@getWeatherJs')->name('weather.js');
Route::post('/weather', 'ApiController@postWeather');
/* Nasa API Routes */
Route::get('/nasa/nasa_apod', 'ApiController@getApod')->name('nasa/nasa_apod');

Route::get('/civilwarmaps', 'ApiController@getCivilWarMaps');


/* CSIS1550 Routes */

Route::get('/CSIS1550', 'CSIS1550Controller@index')->name('CSIS1550/index');


/* Campaign Finance Routes */


Route::get('/campaignfinance/index', 'CampaignFinanceController@index')->name('campaignfinance/index');
Route::get('/campaignfinance/state/{stateindex}', ['uses'=> 'CampaignFinanceController@getStateIndex']);
Route::get('/campaignfinance/pages/{CAND_ID}', ['uses'=> 'CampaignFinanceController@getCandidate']);
Route::get('/campaignfinance/campaigncommittee/{CAND_PCC}', ['uses'=> 'CampaignFinanceController@getCampaignCommittee']);
Route::post('/campaignfinance/committees','CampaignFinanceController@getCommittees')->name('campaignfinance/committees');

    Route::get('/eve', 'EveController@index')->name('eve');
    Route::get('/eve/Callback', 'EveController@Callback')->name('eve/Callback');

    Route::get('/', 'LinkController@index')->name('welcome');
    Route::get('/Datacamp/index', 'DatacampController@index')->name('Datacamp/index');
    Route::get('/Datacamp/scrapy', 'DatacampController@scrapy')->name('Datacamp/scrapy');
    Route::get('/TDA/tdatoken', 'TDAController@tdatoken')->name('/TDA/tdatoken');
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/test', 'HomeController@test')->name('test');
    Route::get('/beta', 'HomeController@beta')->name('beta');


    /* Coinbase Routes */
    Route::get('/coinbase/index', 'CoinbaseController@index')->name('coinbase/index');

    Route::get('/trades', 'CoinbaseController@trades')->name('trades');
    Route::get('/heartbeat', 'CoinbaseController@heartbeat')->name('heartbeat');
    Route::get('/coinbase/products', 'CoinbaseController@products')->name('coinbase/products');
    Route::post('/coinbase/trades', 'CoinbaseController@trades')->name('coinbase/trades');

    Route::get('/coinbase/positions', 'CoinbaseController@positions')->name('coinbase/positions');
    Route::get('/addnewtradedata', 'CoinbaseController@addnewtradedata')->name('addnewtradedata');


    /* Guide Routes */
    Route::get('/guides/index', 'GuideController@index')->name('guides/index');
    Route::get('/guides/GuideUpload', 'GuideController@GuideUpload');
    Route::get('/guides/create', 'GuideController@create')->name('guide.create');
    Route::post('/guides/store', 'GuideController@store')->name('guide.store');
    Route::get('/guides/{guide}', ['uses' => 'GuideController@getGuide']);
    /* ascii-code */

    Route::get('/Binary/index', 'asciiController@index')->name('/Binary/index');
    Route::get('/Binary/ascii-code', 'asciiController@asciicode')->name('/Binary/ascii-code');

    Route::post('/Binary/uploadFile', 'asciiController@uploadFile')->name('/Binary/uploadFile');
    Route::get('/Binary/utf-8-code', 'asciiController@utfcode')->name('/Binary/utf-8-code');
    Route::get('/Binary/unicode', 'asciiController@unicode')->name('/Binary/unicode');
    Route::get('/Binary/utf-8-sandbox', 'asciiController@sandbox')->name('/Binary/utf-8-sandbox');
    Route::post('/Binary/uploadutf', 'asciiController@uploadutf')->name('/Binary/uploadutf');

    /* Google Sheets API Routes */
    Route::get('/googlelogin', 'SheetsInfoController@googlelogin');

    Route::get('/sheetsInfo', 'SheetsInfoController@client')->name('sheetsInfo');

    Route::get('/sheetapi', 'SheetsInfoController@googleapi')->name('googleapi');

    /* STM32 Routes */
    Route::get('/stm32/f446re', 'STM32Controller@f446re')->name('/stm32/f446re');
    Route::get('/stm32/f446re_links', 'STM32Controller@f446re_links')->name('/stm32/f446re_links');
    Route::get('/stm32/f446re_GPIO', 'STM32Controller@f446re_GPIO')->name('/stm32/f446re_GPIO');
    /* Legislator Routes */
    Route::get('/legislator/index', 'LegislatorController@index')->name('/legislator/index');
    Route::get('/legislator/getLegislators', 'LegislatorController@getLegislators')->name('getLegislators');
    Route::get('/legislator/Legislators', 'LegislatorController@Legislators')->name('legislator/list_Legislators');
    Route::get('/legislator/LegislatorData/{candidateID}', 'LegislatorController@LegislatorData')->name('LegislatorData');
    Route::get('/getCandidateID', ['uses' => 'LegislatorController@getCandidateID']);

    /* library Routes */
    Route::get('/library/index', 'libraryController@index')->name('/library/index');
    Route::get('/library/collection', 'LibraryController@collection')->name('/library/collection');
    Route::get('/library/{library}', ['uses' => 'libraryController@getLibrary']);




    /* intel Routes */
    Route::get('/intel/index', 'intelController@index')->name('/intel/index');
    Route::get('/intel/getintel', 'intelController@getintel')->name('/intel/getintel');
    Route::get('/intel/{intel}', ['uses' => 'intelController@getintel']);

    /* GSA Routes */

    Route::post('/GSA/getData', 'GSAController@getData')->name('getData');

    Route::get('/GSA/GSA_Data_Center', 'GSAController@getGSAData')->name('GSA_Data_Center');

    Route::get('/GSA/GSA', 'GSAController@GSA')->name('GSA');

    /* Python Routes */
    Route::get('/getCongressMembers', 'PythonController@getCongressMembers')->name('getCongressMembers');
    Route::get('/Members', 'PythonController@csvToArray')->name('Members');
    Route::get('/legislator/getFIPS', 'PythonController@getFIPS')->name('legislator/getFIPS');
    Route::get('/membersofcongress', 'PythonController@membersofcongress');
    Route::get('/getyourrep', 'PythonController@getyourrep')->name('getyourrep');
    Route::post('/yourrepresentative', 'PythonController@getrep')->name('yourrepresentative');
    Route::get('/myrep/{geoid}', ['uses' => 'PythonController@myrep']);
    Route::get('/blue_on', ['uses' => 'PythonController@blue_on'])->name('blue_on');
    Route::get('/blue_off', ['uses' => 'PythonController@blue_off'])->name('blue_off');
    Route::get('/python/shooter', ['uses' => 'PythonController@shooter'])->name('python/shooter');

    Route::get('python/geturl', ['uses' => 'PythonController@geturl'])->name('python.geturl');
    Route::post('python/geturl', ['uses' => 'PythonController@returntext'])->name('python.returntext');
    Route::get('python/getlinks', ['uses' => 'PythonController@getlinks'])->name('python.getlinks');
    Route::post('python/getlinks', ['uses' => 'PythonController@returnlinks'])->name('python.returnlinks');
    Route::get('python/savelinks', ['uses' => 'PythonController@getsavefile'])->name('python.getfile');
    Route::post('python/savelinks', ['uses' => 'PythonController@savelinks'])->name('python.savelinks');
    Route::get('python/showlinks', ['uses' => 'PythonController@showlinks'])->name('python.showlinks');
    Route::get('python/getTwilight', ['uses' => 'PythonController@getTwilight'])->name('python.getTwilight');
    Route::post('python/getTwilight', ['uses' => 'PythonController@returnTwilight'])->name('python.returnTwilight');


    /* Sonoff Routes */
    Route::get('/homeauto/sonoff', 'SonoffController@sonoff')->name('sonoff');
    /* P5_Sketches Routes */
    Route::get('P5_Sketches/index', 'P5_SketchController@index')->name('P5_Sketches/index');
    Route::get('P5_Sketches/pages/earthquake', 'P5_SketchController@p5js')->name('P5_Sketches/pages/p5js');
    Route::get('P5_Sketches/pages/timedistortion', 'P5_SketchController@timedistortion')->name('P5_Sketches/pages/timedistortion');
    Route::get('P5_Sketches/pages/cubewave', 'P5_SketchController@cubewave')->name('P5_Sketches/pages/cubewave');
    Route::get('P5_Sketches/pages/clock', 'P5_SketchController@clock')->name('P5_Sketches/pages/clock');
    /* Kali Routes */
    Route::get('Kali/index', 'KaliController@index')->name('Kali/index');
    Route::get('Kali/deauth', 'KaliController@deauth')->name('Kali/deauth');
    Route::get('/Kali/kaliUpload', 'KaliController@kaliUpload');
    Route::get('/Kali/create', 'KaliController@create')->name('Kali.create');
    Route::post('/Kali/store', 'KaliController@store')->name('Kali.store');
    Route::get('/Kali/{kali}', ['uses' => 'KaliController@getkali']);

    /* GeoIP Routes */
    Route::get('/IP/GetMyIP', 'GeoController@getIP')->name('/IP/GetMyIP');

    /* Cards Routes */
    Route::get('/cards/cards', 'CardController@index')->name('/cards/cards');
    Route::get('/cards/Civil_War', 'CardController@Civil_War')->name('/cards/Civil_War');
    /* Google Calendar Routes */
    Route::get('/google_calendar/calendar', 'GoogleController@calendar');

    Route::get('/createEvent', 'GoogleController@createEvent');

    Route::post('/saveEvent', 'GoogleController@saveEvent')->name('saveEvent');

    /* YT Routes */


//Route::get('/googlelogin', 'CredController@googlelogin')->name('googlelogin');

    Route::get('/Cred', 'CredController@client')->name('Cred');

    Route::get('/googleapi', 'CredController@googleapi')->name('googleapi');

    Route::get('/YT/Transcript', 'TranscriptController@getTranscript')->name('/YT/Transcript' );

    Route::get('/YT', 'TranscriptController@yt')->name('/YT/yt');

    Route::get('/login/google', 'Auth\LoginController@redirectToProvider');
    Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback');

    Route::get('/YT/yt_video_id/{video_id}', 'TranscriptController@yt_video_id');
    Route::get('/YT/search', 'TranscriptController@search')->name('/YT/search');


    /* Twilight Zone Routes */
    Route::get('/Twilight_Zone/sync', 'TwilightController@sync')->name('/Twilight_Zone/sync');
    Route::get('/Twilight_Zone/index', 'TwilightController@index')->name('/Twilight_Zone/index');
    Route::get('/Twilight_Zone/id/{id}', 'TwilightController@show')->name('/Twilight_Zone/show');
    Route::get('/Twilight_Zone/{directory}', 'TwilightController@getDirectory')->name('/Twilight_Zone/directory');
    Route::match(['PUT', 'PATCH'], 'Twilight_Zone/update/{id}', 'TwilightController@update')->name('/Twilight_Zone/update');
    Route::get('/Twilight_Zone/edit', 'TwilightController@edit')->name('/Twilight_Zone/edit');

    /*
     * EQ Routes
     */
Route::group([
        'namespace' => 'EQControllers',
    ], function() {
    Route::get('/EQemu/index', 'HomeController@index')->name('/EQemu/index');
    Route::get('/EQemu/commands', 'HomeController@commandlist')->name('/EQemu/commands');
    Route::get('/EQemu/account/account_index', 'AccountController@index')->name('/EQemu/account/account_index');
    Route::get('/EQemu/account/id/{id}', 'AccountController@show')->name('/EQemu/account/account_show');
    Route::match(['PUT', 'PATCH'], 'account/update/{id}', 'AccountController@update')->name('/EQemu/account/account_update');
    Route::get('/EQemu/account/account_select', 'AccountController@select')->name('/EQemu/account/account_select');
    Route::post('/EQemu/account/account_result', 'AccountController@result')->name('/EQemu/account/account_result');


    Route::get('/EQemu/zone/zone_index', 'ZoneController@index')->name('/EQemu/zone/zone_index');
    Route::get('/EQemu/zone/id/{id}', 'ZoneController@show')->name('/EQemu/zone/zone_show');
    Route::match(['PUT', 'PATCH'], 'zone\{id}', 'ZoneController@update')->name('/EQemu/zone/zone_update');
    Route::get('/EQemu/zone/zone_select', 'ZoneController@select')->name('/EQemu/zone/zone_select');
    Route::post('/EQemu/zone/zone_result', 'ZoneController@result')->name('/EQemu/zone/zone_result');

    Route::get('/EQemu/item/item_index', 'ItemController@index')->name('/EQemu/item/item_index');
    Route::get('/EQemu/item/id/{id}', 'ItemController@show')->name('/EQemu/item/item_show');
    Route::match(['PUT', 'PATCH'], 'item\{id}', 'ItemController@update')->name('/EQemu/item/item_update');
    Route::get('/EQemu/item/item_select', 'ItemController@select')->name('/EQemu/item/item_select');
    Route::get('/EQemu/item/item_result', 'ItemController@result')->name('/EQemu/item/item_result');

    Route::post('/EQemu/getZone', 'EqController@processZonename')->name('/EQemu/getZone');

    Route::get('/EQemu/Item', 'EqController@getItem')->name('/EQemu/Item');

    Route::post('/getItem', 'EqController@processITEMname')->name('/EQemu/getItem');

    Route::get('/EQemu/atlas', 'EqController@atlas')->name('/EQemu/atlas');

    Route::post('/EQemu/getAccount', 'EqController@getAccount')->name('/EQemu/getAccount');

    Route::post('/EQemu/processAccount/{id}', 'EqController@processAccount')->name('/EQemu/processAccount');



    Route::get('/EQemu/character/character_index', 'CharacterController@index')->name('/EQemu/character/character_index');
    Route::get('/EQemu/character/id/{id}', 'CharacterController@show')->name('/EQemu/character/character_show');
    Route::match(['PUT', 'PATCH'], 'character\{id}', 'CharacterController@update')->name('/EQemu/character/character_update');
    Route::get('/EQemu/character', 'CharacterController@create')->name('/EQemu/character/character_create');
    Route::post('/EQemu/character', 'CharacterController@store')->name('/EQemu/character/character_store');

    Route::get('/EQemu/NPC/NPC_index', 'NPCController@index')->name('/EQemu/NPC/NPC_index');
    Route::get('/EQemu/NPC/id/{id}', 'NPCController@show')->name('/EQemu/NPC/NPC_show');
    Route::match(['PUT', 'PATCH'], 'NPC\{id}', 'NPCController@update')->name('/EQemu/NPC/NPC_update');
    Route::get('/EQemu/NPC', 'NPCController@create')->name('/EQemu/NPC/NPC_create');
    Route::post('/EQemu/NPC', 'NPCController@store')->name('/EQemu/NPC/NPC_store');
    Route::get('/EQemu/NPC/NPC_select', 'NPCController@select')->name('/EQemu/NPC/NPC_select');
    Route::post('/EQemu/NPC/NPC_result', 'NPCController@result')->name('/EQemu/NPC/NPC_result');
});
    /*
     * Washington D.C. Routes
     */
    Route::get('/DC/Home', function() {
        return view('DC.pages.Home');
    });
    Route::get('/DC/index', 'DCController@index')->name('/DC/pages/index');
    Route::get('/DC/indexstone', 'DCController@indexstone')->name('/DC/pages/indexstone');
    Route::get('/DC/pages/{page}', ['uses' => 'DCController@getDCPage']);
    Route::get('/DC/lincolnpictures', 'DCController@lincolnpictures')->name('/DC/lincolnpictures');
    Route::get('/DC/lincoln', function() {
        return view('DC.pages.lincoln');
    });

    /*
     * Costa Rica Routes
     */
    Route::get('/costa/index', 'CostaController@index')->name('/costa/index');

    Route::get('/costa/video', 'CostaController@video')->name('/costa/video');
    Route::get('/costa/photo', 'CostaController@photo')->name('/costa/photo');

    Route::get('/url/url', 'URLController@index')->name('/url/url');

    /*
     * auction Routes
     */
    Route::get('/auctions/index', 'AuctionController@index')->name('/auction/index');
    Route::get('/auctions/update', 'AuctionController@updateAuctions')->name('/auction/update');

    /*
     * flag Routes
     *
     */

    Route::get('/flags/index', 'FlagController@index')->name('/flags/index');
    Route::get('/flags/World', 'FlagController@world')->name('/flags/pages/World');
    Route::get('/flags/States', 'FlagController@states')->name('/flags/pages/States');
    Route::get('/flags/Nato', 'FlagController@nato')->name('/flags/pages/Nato');
    Route::get('/flags/p5', 'FlagController@p5')->name('/flags/pages/p5');
    Route::get('/flags/G7', 'FlagController@G7')->name('/flags/pages/G7');
    Route::get('/flags/OPEC', 'FlagController@OPEC')->name('/flags/pages/OPEC');
    Route::get('/flags/africanunion', 'FlagController@africanunion')->name('/flags/pages/africanunion');
    Route::get('/flags/ArabLeague', 'FlagController@ArabLeague')->name('/flags/pages/ArabLeague');
    Route::get('/flags/ASEAN', 'FlagController@ASEAN')->name('/flags/pages/ASEAN');
    Route::get('/flags/CIS', 'FlagController@CIS')->name('/flags/pages/CIS');
    Route::get('/flags/ECO', 'FlagController@ECO')->name('/flags/pages/ECO');
    Route::get('/flags/OIC', 'FlagController@OIC')->name('/flags/pages/OIC');
    Route::get('/flags/UnitedNations', 'FlagController@unitednations')->name('/flags/pages/UnitedNations');
    Route::get('/flags/map/country', 'FlagController@mapcountry')->name('/flags/map/country');
    Route::get('/flags/map/states', 'FlagController@mapstate')->name('/flags/map/states');
/*
  * map Routes
  *
  */

    Route::get('/maps/index', 'MapController@index')->name('/maps/index');
Route::get('/maps/crime', 'MapController@crime')->name('/maps/crime');
Route::get('/maps/servicerequests', 'MapController@service')->name('/maps/servicerequests');
Route::get('/maps/uscities', 'MapController@uscities')->name('/maps/uscities');
Route::get('/maps/uscolleges', 'MapController@uscolleges')->name('/maps/uscolleges');
    /*
     * ubot Routes
     */

    Route::get('/ubots/index', 'UbotController@index')->name('/ubots/index');
    Route::get('/ubots/ubotUpload', 'UbotController@GuideUpload');
    Route::get('/ubots/create', 'UbotController@create')->name('ubots.create');
    Route::post('/ubots/store', 'UbotController@store')->name('ubots.store');
    Route::get('/ubots/{ubot}', ['uses' => 'UbotController@getubots']);
    /*
     * congress routes
     */
    Route::get('/congress/update', 'CongressController@gethouseactivities')->name('/congress/update');
    Route::get('/congress/dailyactivities', 'CongressController@house_activities')->name('/congress/dailyactivities');
    Route::get('/congress/passedlegislation', 'CongressController@passedlegislation')->name('/congress/passedlegislation');
    /*
     * Executive_Branch routes
     */
    Route::get('/Executive_Branch/index', 'ExecutiveController@index')->name('/Executive_Branch/index');
    Route::get('/Executive_Branch/ukraine', 'ExecutiveController@ukraine')->name('/Executive_Branch/ukraine');
    Route::get('/Executive_Branch/administration', 'ExecutiveController@administration')->name('/Executive_Branch/administration');
    Route::get('/Executive_Branch/succession', 'ExecutiveController@succession')->name('/Executive_Branch/succession');
    /*
     * C21 routes
     */
    Route::get('/C21/index', 'C21Controller@index')->name('/C21/index');

    /*
     * Cspan routes
     */
    Route::get('/cspan/index', 'CspanController@index')->name('/cspan/index');

    /*
     * presidents routes
     */
    Route::get('/presidents/index', 'presidentsController@index')->name('/presidents/index');
Route::get('/presidents/timeline', 'presidentsController@Timeline')->name('/presidents/timeline');
    Route::get('/presidents/pages/{president}', ['uses' => 'presidentsController@getPresident']);

    /*
     * Rhythm routes
     */
    Route::get('/rhythm/index', 'RhythmController@index')->name('/rhythm/index');
    Route::get('/rhythm/index-13', 'RhythmController@index13')->name('/rhythm/index-13');
    Route::get('/rhythm/menu', 'RhythmController@menu')->name('/rhythm/menu');
    Route::post('/rhythm/store', 'RhythmController@store')->name('rhythm.store');

    /*
     * Stormroutes
     */
    Route::get('/storm/galleria', 'StormController@index')->name('/storm/galleria');
