@extends('email.email-layout')
@section('content')
<div class="u-row-container" style="padding: 0px;background-color: transparent">
    <div class="u-row v-row-columns-background-color-background-color" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
        <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr class="v-row-columns-background-color-background-color" style="background-color: #ffffff;"><![endif]-->

        <!--[if (mso)|(IE)]><td align="center" width="600" class="v-col-background-color" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
            <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                <div class="v-col-background-color" style="height: 100%;width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                    <!--<![endif]-->

                        <table id="u_content_text_6" style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px;font-family:'Cabin',sans-serif;" align="left">

                                    <div class="v-line-height" style="line-height: 160%; text-align: left; word-wrap: break-word;">
                                        <p style="font-size: 14px; line-height: 160%;">
                                            <span style="font-size: 22px; line-height: 35.2px;">
                                                Hi {{ $content['name'] ?? '' }}, 
                                            </span>
                                        </p>
                                        <p style="font-size: 14px; line-height: 160%;">
                                            <span style="font-size: 18px; line-height: 28.8px;">
                                            To continue with the previous registration 
                                            <a href="{{$content['view-link']}}">Click Here</a> <br>
                                            </span>
                                        </p>
                                    </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                      
 @endsection