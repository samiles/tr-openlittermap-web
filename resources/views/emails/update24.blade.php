<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ __('app.openlittermap_global_map_update') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc;">
        <tr>
            <td align="center" bgcolor="#3c6be1" style="padding: 40px 0 30px 0;">
                <img src="https://openlittermap.com/assets/logo_small.png" width="300" height="150" style="display: block;" />
                <br>
                <h1><strong style="color: white; font-family: sans-serif;"><a href="https://openlittermap.com">OpenLitterMap.com</a></strong></h1>
                <h1 style="color: #f2f3f5; font-family: Arial, sans-serif; padding-left: 1em; padding-right: 1em;">Update #24 - OpenLitterMap awarded $50,000 by cryptocurrency Cardano</h1>
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 20px 30px 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
                            <p style="font-family: sans-serif; font-size: 18px;">{{ __('app.wonderful_news') }}</p>
                            <ul style="font-family: sans-serif; font-size: 19px;">
                                <li>
                                    <p>{{ __('app.people_holding_the') }}</p>

                                    <p>Over 285 million ada tokens representing $0.5 billion dollars voted for our proposal to develop Littercoin on Cardano.</p>

                                    <p>{{ __('app.this_money_is') }}</p>

                                    <p>{{ __('app.littercoin_is_the') }}</p>
                                </li>

                                <li>
                                    <p>{{ __('app.huge_improvements_have_been_made_to_the') }}<a href="https://openlittermap.com/global">{{ __('app.global_map') }}</a>{{ __('app.you_can_now') }}</p>

                                    <p>{{ __('app.do_you_know') }}</p>
                                </li>

                                <li>
                                    <p>
                                        Significant mobile app update (v2.4.0) which fixes many bugs. Mobile app version 3 is in development.
                                    </p>
                                </li>

                                <li>
                                    <p>{{ __('app.big_changes_to') }}</p>
                                </li>

                                <li>
                                    <p>
                                        New languages added: Spanish & Polish added to openlittermap.com. Can you help us add more languages? This can be done by anyone and requires no coding experience. If you would like to help, please send us an email.
                                    </p>
                                </li>

                                <li>
                                    <p>{{ __('app.we_have_a') }}</p>

                                    <p>{{ __('app.the_school_of') }}</p>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3 style="font-family: sans-serif;">{{ __('app.looking_forward_to') }}</h3>
                            <h3 style="font-family: sans-serif;">{{ __('app.thanks_for_taking') }}</h3>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <td bgcolor="#2ecc71" style="padding: 30px 30px 30px 30px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="font-family: sans-serif;">
                <tr>
                    <td width="75%">{{ __('app.copy_openlittermap_contributors_2021') }}<br/>
                        <p>{{ __('app.if_you_want_to_unsubscribe') }}<a href="https://openlittermap.com/emails/unsubscribe/{{ $user->sub_token }}">click this link</a></p>
                        <p>{{ __('app.you_can_also') }}</p>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <a href="http://www.facebook.com/openlittermap" target="_blank">
                                        <img src="https://openlittermap.com/assets/icons/facebook2.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">{{ __('app.nbsp') }}</td>
                                <td>
                                    <a href="http://www.twitter.com/openlittermap" target="_blank">
                                        <img src="https://openlittermap.com/assets/icons/twitter2.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">{{ __('app.nbsp_1') }}</td>
                                <td>
                                    <a href="http://www.instagram.com/openlittermap" target="_blank">
                                        <img src="https://openlittermap.com/assets/icons/ig2.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">{{ __('app.nbsp_2') }}</td>
                                <td>
                                    <a href="http://www.reddit.com/r/openlittermap" target="_blank">
                                        <img src="https://openlittermap.com/assets/icons/reddit.png" alt="" width="38" height="38" style="display: block;" border="0" />
                                    </a>
                                </td>
                                <td style="font-size: 0; line-height: 0;" width="20">{{ __('app.nbsp_3') }}</td>
                                <td>
                                    <a href="https://openlittermap.tumblr.com/" target="_blank">
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
