<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ __('app.openlittermap_open_source') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc;">
        <tr>
            <td align="center" bgcolor="#3c6be1" style="padding: 40px 0 30px 0;">
                <img src="https://openlittermap.com/assets/littermap.png" width="300" height="150" style="display: block;" />
                <br>
                <h1><strong style="color: white; font-family: sans-serif;"><a href="https://openlittermap.com">OpenLitterMap.com</a></strong></h1>
                <h1 style="color: #f2f3f5; font-family: Arial, sans-serif; padding-left: 1em; padding-right: 1em;">{{ __('app.update_20_openlittermap') }}</h1>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px 30px 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
                            <p style="font-family: sans-serif; font-size: 18px;">{{ __('app.hi_again') }}</p>
                            <p style="font-family: sans-serif; font-size: 18px;">Yesterday, we released the OpenLitterMap source code under the GPL-v3.0 license.</p>
                            <ul style="font-family: sans-serif; font-size: 19px;">
                                <li>
                                    <p>{{ __('app.here_is_a_link_to_our_github_repository') }}</p>
                                    <a href="https://github.com/OpenLitterMap/openlittermap-web">https://github.com/OpenLitterMap/openlittermap-web</a>
                                    <br><br>
                                    Anyone can now inspect and contribute to the OpenLitterMap code, or use it for their own projects in line with the terms of the GPL-v3.0 license.
                                </li>
                                <br>
                                <li>{{ __('app.we_are_actively_looking_for_contributors') }}<br><br>
                                    OpenLitterMap-web is built with Laravel (PHP), Vue.js and Bulma.io. In 2018 I published a paper explaining the full software stack

                                    <a href="https://opengeospatialdata.springeropen.com/articles/10.1186/s40965-018-0050-y">https://opengeospatialdata.springeropen.com/articles/10.1186/s40965-018-0050-y</a>
                                </li>
                                <br>
                                <li>{{ __('app.if_you_would') }}<a href="https://join.slack.com/t/openlittermap/shared_invite/zt-fdctasud-mu~OBQKReRdC9Ai9KgGROw">{{ __('app.slack_channel') }}</a>.
                                </li>
                                <br>
                                <li>{{ __('app.this_is_not_just_for_developers') }}<br><br>{{ __('app.we_are_looking') }}</li>
                                <br>
                                <li>{{ __('app.reminder_that_every') }}<br><br>{{ __('app.on_the_next') }}</li>
                                <br>
                                <li>{{ __('app.moving_forward_we') }}</li>
                                <br>
                                <li>{{ __('app.stay_tuned_for') }}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 style="font-family: sans-serif;">{{ __('app.thanks_again') }}</h3>
                            <h3 style="font-family: sans-serif;">{{ __('app.sen_openlittermap') }}</h3>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <td bgcolor="#2ecc71" style="padding: 30px 30px 30px 30px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-family: sans-serif;">
                <tr>
                    <td width="75%">{{ __('app.copy_openlittermap_contributors_2020') }}<br/>
                        <p>{{ __('app.if_you_want_to_unsubscribe') }}<a href="https://openlittermap.com/emails/unsubscribe/{{ $user->sub_token }}">click this link</a></p>
                        <p>{{ __('app.you_can_also') }}</p>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="http://www.facebook.com/openlittermap">
                                        <img src="https://openlittermap.com/assets/icons/facebook2.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">{{ __('app.nbsp') }}</td>
                                <td>
                                    <a href="http://www.twitter.com/openlittermap">
                                        <img src="https://openlittermap.com/assets/icons/twitter2.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">{{ __('app.nbsp_1') }}</td>
                                <td>
                                    <a href="http://www.instagram.com/openlittermap">
                                        <img src="https://openlittermap.com/assets/icons/ig2.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">{{ __('app.nbsp_2') }}</td>
                                <td>
                                    <a href="http://www.reddit.com/r/openlittermap">
                                        <img src="https://openlittermap.com/assets/icons/reddit.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">{{ __('app.nbsp_3') }}</td>
                                <td>
                                    <a href="https://openlittermap.tumblr.com/">
                                        <img src="https://openlittermap.com/assets/icons/tumblr.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </table>
</table>
</body>
</html>
