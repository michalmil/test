<html>
<head>
<meta name="roboty" content="noindex,nofollow" />
<meta name="gowno" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="mobile-web-app-capable" content="yes">

<meta name="twitter:card" content="player">
<meta name="twitter:site" content="@marvelapp">
<!-- <meta name="twitter:creator" content="@"> -->
<meta name="twitter:title" content="STS klub">
<meta name="twitter:description" content="Marvel Prototype for STS klub">
<!-- <meta name="twitter:image:src" content="https://marvelapp-live.storage.googleapis.com/serve/2016/12/7b73fd78d414ce38877df959dfbd80b.png"> -->
<meta name="twitter:player" content="https://marvelapp.com/98eheeg?emb=1">
<meta name="twitter:player:width" content="1920">
<meta name="twitter:player:height" content="2995">
<meta name="twitter:player:stream" content="https://marvelapp.com/98eheeg?emb=1">
<meta name="twitter:player:stream:content_type" content="image/jpeg">

<meta property="og:title" content="STS klub">
<meta property="og:image" content="https://marvelapp-live.storage.googleapis.com/serve/2016/12/7b73fd78d414ce38877df959dfbd80b.png">
<meta property="og:site_name" content="Marvel Prototyping">
<meta property="og:description" content="Marvel Prototype for STS klub">

<link type="text/css" href="/static/css/prototype.2d9763a1fdb33656415b.css" rel="stylesheet" />

<!-- Polyfills -->
<script type="text/javascript">
    window.Promise || document.write('<sc'+'ript src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.2.1/es6-promise.min.js"></scr'+'ipt>');
    window.fetch || document.write('<sc'+'ript src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.11.0/fetch.min.js"></scr'+'ipt>');
</script>
<!-- Google Analytics -->
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-38711157-1', 'auto');
    ga('send', 'pageview', "prototype-view");
</script>
<!-- Intercom -->
<script type="text/javascript">
  (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;
  s.src='https://widget.intercom.io/widget/{app_id}';
  var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
<script type="text/javascript">
  (function() {
    var trackerReady = fetch('/api/v1/integration/snippet/?project_id=1072761')
      .then(function(response) {
        if (!response.ok) {
          return Promise.reject(response);
        }
        return response.json();
      })
      .then(function(response) {
        var gaSnippet = response.snippets.filter(function(snippet) {
          return snippet.provider === 'ga';
        })[0];
        if (!gaSnippet) {
          return Promise.reject(response);
        }
        ga('create', gaSnippet.tracker_id, 'auto', 'marvelUserGATracker');
      })
      .catch(function(error){
        // catching it so it does not create noise in the console
      });
      window.MARVELAPP = {
        offline: false,
        randomNumber: 4,
        projectId: "98eheeg",
        projectConfig: {"last_active":"2016-12-08 15:16:25.244841","is_archived":false,"isprivate":0,"likes":0,"owner_fk":382285,"images":{"1":{"preview_thumbnail":"https://res.cloudinary.com/marvel-content/image/fetch/s--fl-CTHU---/t_width_320/https://marvelapp-live.storage.googleapis.com/serve/2016/12/7b73fd78d414ce38877df959dfbd80b.png","hotspots":[{"id":22462390,"uuid":"cb226574-e8a1-4695-9a4e-912fff99ffb2","x":345,"y":5,"x2":491,"y2":85,"dest_img_fk":17528219,"img_owner_fk":17477023,"transition":"none","action":"click","owner_hotspot":null,"status":1,"images":[],"type":1,"location":0,"url":"","external_url":"","delta_check":"b0c34e5e0db963d29784d0e5ff9d4d23","project_hotspot_delta":null,"anchor_y_pos":null,"maintain_scroll":false,"stay_on_page":false,"version":0,"new_window":false,"smooth_scroll":false,"timer":null,"is_overlay":false,"overlay_position":1,"overlay_background_colour":null,"overlay_x":0,"overlay_y":0,"project_fk":1072761}],"is_desktop":true,"seq":1,"source_platform_human":"Desktop","top_pixel_colour":"250, 164, 26, 1.0","height":2995,"source_platform":"4","es_canvas_id":null,"is_app_icon":false,"id":17477023,"size":988351,"uuid":"e76d3df1-b350-43c6-811a-660c23098306","bright_pixel_colour":null,"width":1920,"comment_count":36,"version":53,"hotspots_delta":"ba657599318efdfc97e44191592a966a","thumbnail":"https://res.cloudinary.com/marvel-content/image/fetch/s--zHuvSUxR--/q_70,t_thumbnail_fill_320_568/https://marvelapp-live.storage.googleapis.com/serve/2016/12/7b73fd78d414ce38877df959dfbd80b.png","revision":null,"status":5,"preview_thumbnail_640":null,"description":null,"bottom_pixel_colour":"14, 21, 37, 1.0","content_type":"image/png","name":"klub_sts_a.png","layer_sync_uri":"","url":"https://marvelapp-live.storage.googleapis.com/serve/2016/12/7b73fd78d414ce38877df959dfbd80b.png","layer_parent":null,"directory":null,"status_pixel_colour":"22, 72, 159, 1.0"}},"team_name":null,"project_image":"https://res.cloudinary.com/marvel-content/image/fetch/s--n-AIUyTm--/t_project_thumbnail/https://marvelapp-live.storage.googleapis.com/serve/2016/12/7b73fd78d414ce38877df959dfbd80b.png","id":1072761,"published_time":"2016-12-07 07:57:04","team_fk":null,"pusher_channel":"private-project-production_1072761","uuid":"505eb109-5436-4fc6-97bc-f204c83ca138","sync_started":null,"total_size":2591577,"bright_pixel_colour":null,"team_icon":null,"state":1,"sequence_delta":"f1b800ea3fc1b2e653c0cb7d9619dea6","vanity_url":"https://marvelapp.com/98eheeg","sync_ended":null,"version":11,"hotspots_delta":"697c7c7ec86d7d048b2de15aecdf841a","owner_username":"Michal","explore_url":"https://marvelapp.com/explore/1072761/sts-klub","embed_url":"https://marvelapp.com/98eheeg","description":"None","views":0,"es_canvas_id":null,"num_images":4,"human_url":null,"pusher_public_channel":"prototype-production_1072761","is_syncing":0,"project_base_image":"https://marvelapp-live.storage.googleapis.com/serve/2016/12/7b73fd78d414ce38877df959dfbd80b.png","password":"******","properties":[{"id":21421168,"name":"ui-prj-show-hints","value":"0","description":"Show hints on prototype","uuid":"44feff0b-4203-498f-a28c-ef8e277ab3da","read_only":false},{"id":21421153,"name":"ui-prj-status-bar","value":"0","description":"Set status bar background colour","uuid":"51cc44ef-93f0-4b51-b927-d371931ec122","read_only":false},{"id":21421154,"name":"prj-lookback-ever-enabled","value":"0","description":"Lookback ever been enabled for this project","uuid":"cc7a97ff-4c6e-4ab4-9a08-5e9fdf682303","read_only":true},{"id":21421152,"name":"prj-comments-ever-enabled","value":"1","description":"Comments have ever been enabled for this project","uuid":"4c1fbcae-3a28-4d7a-929d-29c7184b15d2","read_only":true},{"id":21421165,"name":"prj-lookback-enabled","value":"0","description":"Enable Lookback for this project","uuid":"95140787-f418-4490-bb49-87ab3d474fb4","read_only":false},{"id":21421156,"name":"ui-prj-responsive","value":"0","description":"Set images as responsive","uuid":"7fcb3d88-153c-42f5-8039-c287958f24a7","read_only":false},{"id":21421157,"name":"ui-prj-thumbnail-width","value":"180","description":"Set thumbnail width for project view","uuid":"a87ae5b3-4bcd-4927-a5ea-b24759d69434","read_only":false},{"id":21421161,"name":"ui-prj-retina-scale","value":"0","description":"Scale images to half their original width for retina images","uuid":"99027c00-1409-4639-98e7-22e0a4667ae5","read_only":false},{"id":21421160,"name":"ui-prj-center-image","value":"0","description":"Center image instead of aligning left","uuid":"e43c9bf7-8109-452f-b7e3-d0452e817ee6","read_only":false},{"id":21421155,"name":"ui-prj-background-hex","value":"FFFFFF","description":"Set background colour for prototype preview","uuid":"16bfd641-eb59-4388-86a2-0e78ec9c69e0","read_only":false},{"id":21421150,"name":"ui-prj-frame","value":"web-frame","description":"Set phone frame","uuid":"6540db95-6768-4c06-8f11-7d835fa7b445","read_only":false},{"id":21421162,"name":"ui-prj-prototype-background-hex","value":"000000","description":"Set background for prototype background","uuid":"35fe5945-f15f-48c4-8281-4912b94c5551","read_only":false},{"id":21421163,"name":"ui-prj-disable-swipe","value":"1","description":"Disable prototype swipes","uuid":"7d9f9be3-0e91-4d85-a775-9e085f4abb6c","read_only":false},{"id":21421164,"name":"ui-prj-center-overflow","value":"0","description":"Center images and hide overflow on non-responsive images","uuid":"37c13566-250d-4c8b-bd18-247104ebddf0","read_only":false},{"id":21421158,"name":"ui-prj-remove-status","value":"0","description":"Removes status bar on project","uuid":"1ad6e92c-6765-4493-8d10-f0b0e5c596d8","read_only":false},{"id":21421166,"name":"ui-prj-disable-frame","value":"0","description":"New site features for user","uuid":"9ac1e753-2685-4075-aa44-9c8906ab399c","read_only":false},{"id":21421151,"name":"prj-comments-enabled","value":"1","description":"Enable comments for this project","uuid":"08aaa57d-e68f-4ae4-bd5e-5bc7fed574d0","read_only":false},{"id":21421170,"name":"ui-prj-frame-colour","value":"black","description":"Set phone colour","uuid":"e5d9cf6c-9c3e-4759-8efc-1a011a70b711","read_only":false},{"id":21421167,"name":"ui-prj-orientation","value":"portrait","description":"Set phone orientation","uuid":"7385175f-05ec-41fe-a520-8f08c93ff75e","read_only":false},{"id":21421169,"name":"ui-prj-explore-background-hex","value":"#000000","description":"Set background colour for explore view","uuid":"fdd3030f-96c6-4ff9-952a-9ca632b56392","read_only":false}],"app_icon":null,"canvas_images":[],"is_deleted":false,"name":"STS klub","date_modified":"2016-12-09 12:40:59.101584","cursor":"AAEjbUwriZihpjkg4V839_gVFaH_UMqmrL60lOGBNbJsoWMzBWHdrjSZu7xBmY2mwHVFd8EahbcDA8CmhUYcdnl0a_Q0VoxEw_FdfUbz0aIJjiqA9I6huO7oeRCv0Jc1U2gSXeV2DwGjJ2rQchrLDUL5FDxsYnyaoM_scuyj0TcoE-rwBkgCjfd9Fzk76CePkkIkCtq8gkY7mk6UveFTKUoMMN7K3RGiZX8xbBRZwQGmfbEaL4c7s1MZGSmAhuhT-iu1W6tifCwAkAjXEJMqBDGCKwbbAYs5Y4boQ7m86T9W9_6WzQpH1kVMTvodEMgu-1IN_Tx3svJETSmCuiMhTr1mmcvYg97m5rjpMyENy76wtBNv1OgDi0uDnYyDIwUgDp_XX6vIVZf1PUU26Ww57-se","team_uri":null,"published":false,"date_created":"2016-12-07 07:56:11","is_pro":true,"resource_uri":"/project/1072761/"},
        settings: {"CANVAS_EASEL_HOST": "https://easel.marvelapp.com", "DISALLOWED_FILENAME_CHARACTERS": "\\\"<>=", "PUSHER": {"PROTOTYPE_CHANNEL_PREFIX": "prototype-production_", "PROJECT_CHANNEL_PREFIX": "private-project-production_", "EXPLORE_CHANNEL_PREFIX": "explore-production_", "USER_CHANNEL_PREFIX": "private-user-production_"}, "BASE_URL": "https://marvelapp.com", "STRIPE_PUBLISHABLE": "pk_live_1afBzKMbfYd1vhu8lsneB1Zb", "ENVIRONMENT": "live", "APP_SENTRY_DSN": "https://873a8ca087a0492d8d22b808d6931306@sentry.io/97119", "BOX_COM_CLIENT_ID": "wo18m8uju79g09r64gf5r7xm59xf6zif", "GOOGLE_CLIENT_ID": "308573482263-ddask8oq90fg9n9o5t6ub8190v5nqvta.apps.googleusercontent.com", "CANVAS_TOKEN_PROVIDER_HOST": "https://marvelapp.com", "PROTOTYPE_SENTRY_DSN": "https://883389dfaa2349e891ef7b4f0a6cec51@sentry.io/96884", "MARVEL_CORS_PROXY": "https://marvelapp.com/proxy/", "SITE_SENTRY_DSN": "https://3fad520e195b4e168ceb79d16cbce216@app.getsentry.com/38273", "INTERCOM_APP_ID": "9afe6b55dbac3807f4bc7ebcdf1fc0470c2454f1", "REVISION": "64e1ebf807"},
        iOSApp: 0,
        role: "Owner",
        currentUser: {"id":382285,"username":"Michal","email":"michal.miler@sts.pl","state":1,"avatar_image":"","created_on":"2016-05-17T18:45:55Z","show_tooltips":1,"is_syncing":3,"last_active":"2016-12-09T12:39:50Z","properties":[{"id":2446273,"name":"show-onboarding","value":"0","description":"Should show user onboarding"},{"id":3296160,"name":"ui-onboarding-progress-dashboard","value":"0","description":"Onboarding progress for user - dashboard"},{"id":1693994,"name":"msg-new-app","value":"0","description":"Indicates user received welcome message for app"},{"id":1693991,"name":"usr-email-notifications","value":"1","description":"Email notification for user"},{"id":1693992,"name":"ui-notify-last_seen","value":"0","description":"Set's most recently seen notification"},{"id":1693993,"name":"ui-pro-notify","value":"0","description":"Notify user of pro launch"},{"id":1693990,"name":"ui-new-feature","value":"1030","description":"New site features for user"},{"id":3296161,"name":"ui-onboarding-progress-project","value":"0","description":"Onboarding progress for user - project"}],"country":"PL","subscription":{"id":346091,"subscription_state":1,"subscription_start_date":"2016-11-24T20:20:57Z","subscription_end_date":"2016-12-24T20:20:57Z","trial_start_date":null,"trial_end_date":null,"included_users":[],"is_subscribed":true,"gifted_subscription":null,"source":2,"plan":{"name":"Plus","slug":"plus19","id":70,"available_features":["Unlimited Projects","Unlimited Comments","Download offline prototypes as ZIP/PDF and Android","Password protect prototypes","Remove Marvel branding","Download offline prototypes for iOS"],"unavailable_features":[],"price_monthly":1900,"price_yearly":18000,"prices":{"monthly":1900,"yearly":18000},"currency":"usd","plan_page_position":3,"stripe_plan_id_monthly":"plus-19-monthly","stripe_plan_id_yearly":"plus-180-yearly","plan_allowances":[{"name":"app_build","quantity":0,"is_unlimited":true,"resets":false,"usage_name":"App Build"},{"name":"project_comments","quantity":0,"is_unlimited":true,"resets":false,"usage_name":"Comment Enabled Project"},{"name":"lookback","quantity":0,"is_unlimited":true,"resets":false,"usage_name":"Lookback Enabled Project"},{"name":"download_prototypes","quantity":0,"is_unlimited":true,"resets":false,"usage_name":"Zip Download"},{"name":"ios_app_builds","quantity":0,"is_unlimited":true,"resets":false,"usage_name":"iOS App build"},{"name":"password_protect","quantity":0,"is_unlimited":true,"resets":false,"usage_name":"Password Protect"},{"name":"create_projects","quantity":0,"is_unlimited":true,"resets":false,"usage_name":"Project"}],"is_enterprise":false,"team_members":null},"billing_cycle":"monthly","display_price":"$19/month","allowance_reset_due":"2016-12-20","allowances":[{"name":"project_comments","quantity":0,"quantity_remaining":0,"quantity_used":56,"resets":false,"description":"unlimited comments","display_name":"project comments","is_unlimited":true,"usage_name":"Comment Enabled Project","id":1133159},{"name":"lookback","quantity":0,"quantity_remaining":0,"quantity_used":0,"resets":false,"description":"lookback allowance","display_name":"lookback","is_unlimited":true,"usage_name":"Lookback Enabled Project","id":1133160},{"name":"password_protect","quantity":0,"quantity_remaining":0,"quantity_used":0,"resets":false,"description":"Password protect prototypes","display_name":"password protect","is_unlimited":true,"usage_name":"Password Protect","id":1133161},{"name":"app_build","quantity":0,"quantity_remaining":0,"quantity_used":0,"resets":false,"description":"app builds","display_name":"app build","is_unlimited":true,"usage_name":"App Build","id":1153304},{"name":"download_prototypes","quantity":0,"quantity_remaining":0,"quantity_used":0,"resets":false,"description":"Download prototypes as zips","display_name":"download prototypes","is_unlimited":true,"usage_name":"Zip Download","id":1153307},{"name":"ios_app_builds","quantity":0,"quantity_remaining":0,"quantity_used":0,"resets":false,"description":"iOS app build","display_name":"ios app builds","is_unlimited":true,"usage_name":"iOS App build","id":1153308},{"name":"create_projects","quantity":0,"quantity_remaining":0,"quantity_used":36,"resets":false,"description":"","display_name":"create projects","is_unlimited":true,"usage_name":"Project","id":1539009}],"is_active":true,"company":{"name":"","cname":""},"user_fk_id":382285,"owner":{"avatar":"https://marvelapp-live.storage.googleapis.com/serve/b31f6ea6794044d897f7a0fb382056df.jpg","email":"michal.miler@sts.pl","id":382285,"username":"Michal","colour":"#FF9E7C","state":1}},"payment_status":0,"total_time_processed":0,"total_number_of_syncs":0,"teams":[],"transaction_key":"0628f2538e5277deaa48a31940dde0ce","dropbox_id":"8271915","dropbox_email":"redzpl@gmail.com","stripe_id":"cus_8VncNRRYt6WBIP","dropbox_connected":true,"has_password":true,"gravatar_data":{"url":"https://res.cloudinary.com/marvel-content/image/fetch/s--Vzat21MB--/t_profile_image_200/https://marvelapp-live.storage.googleapis.com/serve/b31f6ea6794044d897f7a0fb382056df.jpg","colour":""},"is_super":false,"is_enterprise_admin":false,"is_enterprise_owner":false,"is_enterprise_member":false,"is_app":true,"is_ipad_app":false,"is_android_app":true,"is_sketch":false,"bio":"","handle":null,"website":null,"uploaded_avatar":{"id":12372632,"name":"","description":null,"width":405,"height":720,"is_app_icon":false,"url":"https://marvelapp-live.storage.googleapis.com/serve/b31f6ea6794044d897f7a0fb382056df.jpg","version":3,"size":null,"status":5,"directory":null,"thumbnail":"https://res.cloudinary.com/marvel-content/image/fetch/s--fpdisQzW--/q_70,t_thumbnail_fill_320_568/https://marvelapp-live.storage.googleapis.com/serve/b31f6ea6794044d897f7a0fb382056df.jpg","preview_thumbnail":"https://res.cloudinary.com/marvel-content/image/fetch/s--SiwQz1Bw--/t_width_320/https://marvelapp-live.storage.googleapis.com/serve/b31f6ea6794044d897f7a0fb382056df.jpg","preview_thumbnail_640":null,"hotspots":[],"content_type":"image/jpeg","layer_parent":null,"top_pixel_colour":"244, 248, 247, 1.0","bottom_pixel_colour":"112, 168, 205, 1.0","status_pixel_colour":null,"bright_pixel_colour":null,"hotspots_delta":"","uuid":"1b22058f-0758-487f-b0c1-2029da61ab2b","layer_sync_uri":"","is_desktop":false,"revision":null,"source_platform":"1","seq":null,"comment_count":0,"source_platform_human":"Dropbox","es_canvas_id":null},"has_published":false,"drive_connected":false,"box_com_connected":false,"drive_access_data":null,"box_com_access_data":null,"drive_email":null,"first_name":"Michal","last_name":"","coupons":0,"integrations":[],"user_hash":"90c868e978381a04e74a6d190758cefeb44aa47de977e25a757f837324208741","test_group_number":68,"intercom":{}},
        trackAsync: function(location, screenName) {
          return trackerReady.then(function() {
            ga('marvelUserGATracker.send', 'pageview', {
              page: location.pathname + screenName,
              title: screenName
            });
          });
        }
      };
  }());
</script>
</head>
<body>
  <div id="prototype"></div>
  <script type="text/javascript" src="/static/common-bundle.eee9a0146e26ecfc71e8.js" ></script>
  <script type="text/javascript" src="/static/prototype-bundle.2d9763a1fdb33656415b.js" ></script>
</body>
</html>
