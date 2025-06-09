<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div style="font-family: 'BIZ UDPGothic', sans-serif; color: #464545">
            <div style="padding-top: 5px; padding-bottom: 5px">
                <div style="text-align: center; padding: 16px;">
                    <h1 style="font-size: 28px; line-height: 38px; font-weight: bold; margin-bottom: 0;">ご契約内容通知書</h1>
                    <p style="font-size: 14px; line-height: 24px; margin-top: 5px;">※契約内容に関する重要なお知らせです。十分にお読みください。</p>
                </div>
                <div style="padding: 20px">
                    <div style="padding: 16px;">
                        <div style="width: 100%; display:flex;">
                            <div align="left" style="width: 65%; float: left;">
                                <div style="border-bottom: 1px solid #d1d1d1; padding-bottom: 5px;">
                                    <span style="justify-content: space-between; min-width: 80px; font-size: 14px;">契約事業者<span>：</span>
                                    </span>
                                    <span style="padding-left: 16px; font-size: 16px; font-weight: bold;">H.I.S.Mobile株式会社</span>
                                </div>
                                <div style="border-bottom: 1px solid #d1d1d1; padding-top: 20px; padding-bottom: 5px;">
                                    <span style="display: inline-flex; justify-content: space-between; min-width: 80px; font-size: 12px;">契約番号<span>：</span>
                                    </span>
                                    <span style="padding-left: 16px; font-size: 14px; font-weight: bold;">1</span>
                                </div>
                                <div style="border-bottom: 1px solid #d1d1d1; padding-top: 20px; padding-bottom: 5px;">
                                    <span style="display: inline-flex; justify-content: space-between; min-width: 80px; font-size: 12px;">契約日<span>：</span>
                                    </span>
                                    <span style="padding-left: 16px; font-size: 14px; font-weight: bold;">2024/10/07</span>
                                </div>
                                <div style="border-bottom: 1px solid #d1d1d1; padding-top: 20px; padding-bottom: 5px;">
                                    <span style="display: inline-flex; justify-content: space-between; min-width: 80px; font-size: 12px;">契約者名<span>：</span>
                                    </span>
                                    <span style="padding-left: 16px; font-size: 14px; font-weight: bold;">田中太郎</span>
                                </div>
                                <div style="border-bottom: 1px solid #d1d1d1; padding-top: 20px; padding-bottom: 5px;">
                                    <span style="display: inline-flex; justify-content: space-between; min-width: 80px; font-size: 12px;">住所<span>：</span>
                                    </span>
                                    <span style="padding-left: 16px; font-size: 14px; font-weight: bold;">〒261-0004 千葉県千葉市美浜区高洲４－１－１</span>
                                </div>
                            </div>
                            <div align="left" style="width: 30%; float: left; margin-left: 5%;">
                                <div style="margin-bottom: 18px">
                                    {{-- <img style="width: 100%" src="{{ $qr }}" alt="qr_code" /> --}}
                                    {{-- <img style="width: 100%" src="{{ $qr }}" alt="qr_code" /> --}}
                                    {{-- <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG('9a46c8eb-a4f2-4980-ae65-b306d31655cb', '128') }}" alt="barcode" /> --}}
                                    {{-- <div>{!! DNS1D::getBarcodeHTML('9a46c8eb-a4f2-4980-ae65-b306d31655cb', 'C128') !!}</div> --}}
                                    {{-- <div><img src="data:image/png;base64,{{ DNS1D::getBarcodePNG('123456789', 'C128') }}" /></div> --}}
                                    {{-- <div>9a46c8eb-a4f2-4980-ae65-b306d31655cb</div> --}}
                                    <div><img src="data:image/png;base64,{{ DNS1D::getBarcodePNG('9a46c8eb-a4f2-4980-ae65-b306d31655cb', 'C128') }}" /></div>
                                    <div style="font-size: 10px;">9a46c8eb-a4f2-4980-ae65-b306d31655cb</div>
                                </div>
                                <div>
                                    {{-- <img style="width: 100%" src="{{ $qr }}" alt="qr_code" /> --}}
                                    <div><img src="data:image/png;base64,{{ DNS1D::getBarcodePNG('JCI0002030251', 'C39') }}" /></div>
                                    <div style="font-size: 10px;">JCI0002030251</div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div style="width: 100%; font-size: 12px; color: #747474; padding-top: 15px;">
                            <p>お客様の契約を特定する情報です。</p>
                            <p>お問い合わせの際には上記電話番号を担当者にお伝えください。</p>
                        </div>
                        <div style="padding: 16px; width: 100%;">
                            <h2 style="font-size: 20px; font-weight: bold; text-align: center;">主要なサービスの内容・料金</h2>
                            <div style="width: 150px; height: 4px; background-color: #009cf3; border-radius: 6px; margin: 0 auto;"></div>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">主要なサービスの内容</p>
                        </div>
                        <div style="margin-bottom: 21px">
                            <div style="margin-bottom: 10px;">
                            <p style="font-size: 14px; font-weight: bold; margin: 0;">自由自在290プラン 7GB (ドコモ回線)</p>
                            <p style="font-size: 12px; margin-top: 10px;">※サービス内容の詳細は別紙資料をご確認ください。</p>
                            </div>
                            <p style="font-size: 14px; font-weight: bold;">初期手数料 ： 3,300円</p>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">月額基本料</p>
                        </div>
                        <p style="font-size: 14px; font-weight: bold;">プラン名 ： 自由自在290プラン</p>
                        <div style="font-size: 12px;">
                            <p>本商品の月額基本料は、当該料金月（暦月ではなく、開通日を起算日とする1ヶ月間をいいます）に選択されているデータ通信プランに応じて、以下のいずれかの金額を翌料金月の初日に課金します。</p>
                            <p>なお、上限1GBプランについては、データ通信使用量に応じたいずれかの金額を課金します。</p>
                            <p>※「20GBプラン」および「50GBプラン」の月額基本料には、無料通話分（1回あたり5分までの国内通話料）が含まれています。</p>
                        </div>
                        <table style="width: 100%; margin-bottom: 20px; font-size: 14px;">
                            <thead>
                            <tr style="width: 100%; display: flex; flex-direction: row; font-size: 12px; font-weight: bold; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                <th id="0" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">データ通信プラン</p>
                                </th>
                                <th id="1" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">基準データ通信量</p>
                                </th>
                                <th id="2" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">データ通信使用量</p>
                                </th>
                                <th id="3" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">月額基本料</p>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr style="width: 100%; display: flex; flex-direction: row; font-size: 12px; height: 47px;">
                                    <td style="width: 25%; height: 100%; display: inline-grid; align-items: center; justify-content: center; text-align: center; border-bottom: 1px solid #d1d1d1;">
                                        <p style="margin-top: -15px">上限1GBプラン</p>
                                    </td>
                                    <td style="width: 25%; height: 100%; display: inline-grid; align-items: center; justify-content: center; text-align: center; border-bottom: 1px solid #d1d1d1;">
                                        <p style="margin-top: -15px">1GB (1,000MB)</p>
                                    </td>
                                    <td style="width: 25%; height: 100%; text-align: center; border-bottom: 1px solid #d1d1d1;">
                                        <div
                                            style="
                                            height: 47px;
                                            display: flex;
                                            justify-content: center;
                                            white-space: nowrap;
                                            align-items: center;
                                            "
                                        >
                                            100MBまで
                                        </div>
                                    </td>
                                    <td style="width: 25%; height: 100%; text-align: right; border-bottom: 1px solid #d1d1d1;">
                                        <div
                                            style="
                                            height: 47px;
                                            display: flex;
                                            justify-content: end;
                                            white-space: nowrap;
                                            align-items: center;
                                            "
                                        >
                                            290円
                                        </div>
                                    </td>
                                </tr>
                                <tr style="width: 100%; display: flex; flex-direction: row;">
                                    <td colspan="3" style="width: 75%; text-align: right; padding-right: 60px; height: 47px; font-size: 14px;">
                                        <div style="height: 47px; display: flex; justify-content: center;  white-space: nowrap; align-items: center">
                                            1GB (1,000MB)まで
                                        </div>
                                    </td>
                                    <td style="width: 25%; text-align: right; height: 47px; font-size: 14px;">
                                        <div style="height: 47px; display: flex; justify-content: end; white-space: nowrap; align-items: center; text-align: center;">550円</div>
                                    </td>
                                </tr>
                                <tr style="width: 100%; display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">
                                        <p style="margin-top: -15px">3GBプラン</p>
                                    </td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">
                                        <p style="margin-top: -15px">3GB (3,000MB)</p>
                                    </td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">
                                        <p style="margin-top: -15px">ー</p>
                                    </td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: end; height: 47px; text-align: right;">
                                        <p style="margin-top: -15px">770円</p>
                                    </td>
                                </tr>
                                <tr style="width: 100%; display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">
                                        <p style="margin-top: -15px">7GBプラン</p>
                                    </td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">
                                        <p style="margin-top: -15px">7GB (7,000MB)</p>
                                    </td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">
                                        <p style="margin-top: -15px">ー</p>
                                    </td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: end; height: 47px; text-align: right;">
                                        <p style="margin-top: -15px">990円</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">通話料</p>
                        </div>
                        <table style="width: 100%; margin-bottom: 20px">
                            <thead>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: bold; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <th id="0" style="height: 47px; background: #f1f1f1; width: 50%; display: inline-grid; align-items: center;">通話種別</th>
                                    <th id="1" style="height: 47px; background: #f1f1f1; width: 50%; display: inline-grid; align-items: center;">月額基本料</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px;">
                                    <td rowspan="2" style="width: 50%; height: 47px; display: inline-grid; align-items: center; justify-content: center; text-align: center; border-bottom: 1px solid #d1d1d1;">
                                        <div style="height: 47px;"> 国内通話（一部の場合を除きます）</div></td>
                                    <td rowspan="2" style="width: 50%; height: 47px; display: inline-grid; align-items: center; justify-content: center; text-align: center; border-bottom: 1px solid #d1d1d1;">
                                        <div style="height: 47px;">円 / 30秒</div></td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">通話定額オプション</p>
                        </div>
                        <p style="font-size: 12px; font-weight: 400; line-height: 24px">
                            ※一方的または機械的な発信等に該当する国内通話には22.0円/30秒の通話料を適用します。また、一定の電話番号に発信する国内通話、国際ローミングおよび国際電話には所定の通話料が発生します。詳細は別紙資料をご確認ください。
                        </p>
                        <table style="width: 100%; margin-bottom: 20px">
                            <thead>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: bold; line-height: 24px; border-bottom: 1px solid #d1d1d1;">
                                    <th id="0" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center;">オプション名</th>
                                    <th id="1" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center;">適用日</th>
                                    <th id="2" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center;">月額基本料</th>
                                    <th id="3" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center;">上限金額</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; background-color: #f1f1f1; text-align: center;">完全かけ放題</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">YYYY/MM/DD</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">1,480円</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">有</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; background-color: #f1f1f1; text-align: center;">通話5分定額</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">1,500円</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">SMS</p>
                        </div>
                        <div style="font-size: 12px; font-weight: 400; line-height: 24px">
                            <p>SMSの送信には以下の料金が発生します（SMSの受信は無料です）。</p>
                            <p>※1 送信文字数に応じて異なります。</p>
                        </div>
                        <div style="display: flex; width: 100%; font-size: 12px; line-height: 24px">
                            <div style="width: 50%; float: left; background-color: #f1f1f1; border-bottom: 1px solid #d1d1d1; border-top: 1px solid #d1d1d1; font-weight: bold;">
                                <div style="height: 47px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #d1d1d1; text-align: center;">日本国内から日本国内へのSMS送信</div>
                                <div style="height: 47px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #d1d1d1; text-align: center;">日本国内から日本国外へのSMS送信</div>
                                <div style="height: 47px; display: flex; align-items: center; justify-content: center; text-align: center;">日本国外からのSMS送信</div>
                            </div>
                            <div style="width: 50%; float: left; border-bottom: 1px solid #d1d1d1; border-top: 1px solid #d1d1d1">
                                <div style="height: 47px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #d1d1d1; text-align: center;">3～33円 ※１</div>
                                <div style="height: 47px; display: flex; align-items: center; justify-content: center; border-bottom: 1px solid #d1d1d1; text-align: center;">50円～500円[非課税] ※１</div>
                                <div style="height: 47px; display: flex; align-items: center; justify-content: center; text-align: center;">100円[非課税]</div>
                            </div>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">ユニバーサルサービス料</p>
                        </div>
                        <div style="font-size: 12px; font-weight: 400; line-height: 24px">
                            <p>※詳細は別紙資料をご確認ください。</p>
                            <p style="margin-top: 10px; margin-bottom: 20px">2.0円 （2024年10月現在）</p>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">電話リレーサービス料</p>
                        </div>
                        <div style="font-size: 12px; font-weight: 400; line-height: 24px">
                            <p>※詳細は別紙資料をご確認ください。</p>
                            <p style="margin-top: 10px; margin-bottom: 20px">1.0円 （2024年10月現在）</p>
                        </div>
                        <div style="padding: 16px; width: 100%;">
                            <h2 style="font-size: 18px; line-height: 27px; font-weight: bold; text-align: center;">料金の支払い時期に関する説明</h2>
                            <div style="width: 150px; height: 4px; background-color: #009cf3; border-radius: 6px; margin: 0 auto;"></div>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">決済方法</p>
                        </div>
                        <div style="font-size: 12px; font-weight: 400; line-height: 24px">
                            <p style="font-size: 14px; font-weight: bold;">お申込み時にご登録いただいたクレジットカードによる決済</p>
                            <p style="margin-top: 16px; margin-bottom: 20px">※詳細は別紙資料をご確認ください。</p>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">支払日</p>
                        </div>
                        <div style="font-size: 12px; font-weight: 400; line-height: 24px">
                            <p style="font-size: 14px; font-weight: bold;">開通日が毎月の課金日となります。</p>
                            <p style="font-size: 14px; font-weight: bold;">開通日が31日の場合、毎月末日が課金日となります。</p>
                            <p style="font-size: 14px; font-weight: bold;">開通日が29日/30日の場合、2月の課金日は末日となります。</p>
                            <p style="margin-top: 16px; margin-bottom: 20px">※詳細は別紙資料をご確認ください。</p>
                        </div>
                        <div style="padding: 16px; width: 100%;">
                            <h2 style="font-size: 18px; line-height: 27px; font-weight: bold; text-align: center;">契約変更・解約の条件等</h2>
                            <div style="width: 150px; height: 4px; background-color: #009cf3; border-radius: 6px; margin: 0 auto;"></div>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">解約の条件</p>
                        </div>
                        <div style="font-size: 14px; font-weight: bold; line-height: 24px; margin-bottom: 16px">
                            <p>解約はいつでも可能です。</p>
                            <p>最低利用期間および解約金はありません。</p>
                            <p>※付帯オプションなどをご契約している場合は、「契約内容の確認・変更」から解約のお手続きをお願いします。</p>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">契約変更・解約の方法</p>
                        </div>
                        <div style="font-size: 14px; font-weight: 400; line-height: 24px">
                            <p>My HISモバイル（<a href="https://my.his-mobile.com" style="color: #009cf3">https://my.his-mobile.com</a>）の「解約」よりお申込みください。</p>
                            <p>MNP（携帯電話番号ポータビリティ）により他の携帯電話事業者に転出する場合には、MNP予約番号が必要です。</p>
                            <p>MNP予約番号の発行はMy HISモバイルからお申込みください。</p>
                            <p>※My HISモバイルのログインにはご登録されたHISモバイル ID(メールアドレス)とパスワードが必要です。</p>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">初期契約解除制度の適用の有無</p>
                        </div>
                        <div style="font-size: 14px; font-weight: 400; line-height: 24px; margin-bottom: 16px">
                            本契約により提供する通信サービスには、初期契約解除制度の適用があります。開通日から起算して８日が経過するまでの間、当社に書面または当社所定の方法で通知することにより、本商品の利用契約を解除することができます。初期契約解除の詳細は別紙資料をご確認ください。
                        </div>
                        <div style="padding: 16px; width: 100%;">
                            <h2 style="font-size: 18px; line-height: 27px; font-weight: bold; text-align: center;">オプションサービス・その他</h2>
                            <div style="width: 150px; height: 4px; background-color: #009cf3; border-radius: 6px; margin: 0 auto;"></div>
                        </div>
                        <div>
                            <p style="font-size: 12px; font-weight: 400; line-height: 24px; margin-bottom: 10px">※詳細は別紙資料をご確認ください。</p>
                            <table style="width: 100%; margin-bottom: 20px">
                            <thead>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: bold; line-height: 24px; border-bottom: 1px solid #f1f1f1">
                                <th id="0" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">オプション名</th>
                                <th id="1" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">適用日</th>
                                <th id="2" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">月額基本料</th>
                                <th id="3" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">設定有無</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #f1f1f1">
                                <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">i-フィルター for マルチデバイス</td>
                                <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">396円</td>
                                <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">音声オプション※1</p>
                        </div>
                        <div>
                            <table style="width: 100%; margin-bottom: 10px">
                            <thead>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: bold; line-height: 24px; border-bottom: 1px solid #f1f1f1">
                                <th id="0" style="height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px; text-align: center">オプション名</p>
                                </th>
                                <th id="1" style="height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">適用日</p>
                                </th>
                                <th id="2" style="height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">月額基本料</p>
                                </th>
                                <th id="3" style="height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">上限金額</p>
                                </th>
                                <th id="4" style="height: 47px; background: #f1f1f1; width: 20%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">設定有無</p>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td
                                        style="
                                            padding: 0 16px;
                                            width: 20%;
                                            display: inline-grid;
                                            align-items: center;
                                            justify-content: center;
                                            height: 47px;
                                            background-color: #f1f1f1;
                                            text-align: center;
                                            "
                                        >キャッチホン</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">275円</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td
                                        style="
                                            padding: 0 16px;
                                            width: 20%;
                                            display: inline-grid;
                                            align-items: center;
                                            justify-content: center;
                                            height: 47px;
                                            background-color: #f1f1f1;
                                            text-align: center;
                                        "
                                        >留守番電話</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">385円</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td
                                        style="
                                            padding: 0 16px;
                                            width: 20%;
                                            display: inline-grid;
                                            align-items: center;
                                            justify-content: center;
                                            height: 47px;
                                            background-color: #f1f1f1;
                                            text-align: center;
                                        "
                                    >転送電話</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">>0円 ※2</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">0円（利用不可）</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td
                                        style="
                                            padding: 0 16px;
                                            width: 20%;
                                            display: inline-grid;
                                            align-items: center;
                                            justify-content: center;
                                            height: 47px;
                                            background-color: #f1f1f1;
                                            text-align: center;
                                        "
                                    >国際ローミング
                                    </td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">0円 ※3
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">0円（利用不可）</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td
                                        style="
                                        padding: 0 16px;
                                        width: 20%;
                                        display: inline-grid;
                                        align-items: center;
                                        justify-content: center;
                                        height: 47px;
                                        background-color: #f1f1f1;
                                        text-align: center;
                                        "
                                    >国際電話
                                    </td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">275円</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td
                                        style="
                                        padding: 0 16px;
                                        width: 20%;
                                        display: inline-grid;
                                        align-items: center;
                                        justify-content: center;
                                        height: 47px;
                                        background-color: #f1f1f1;
                                        text-align: center;
                                        "
                                    >留守番電話・キャッチホンパック
                                    </td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">275円</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td
                                        style="
                                        padding: 0 16px;
                                        width: 20%;
                                        display: inline-grid;
                                        align-items: center;
                                        justify-content: center;
                                        height: 47px;
                                        background-color: #f1f1f1;
                                        text-align: center;
                                        "
                                    >完全かけ放題オプション
                                    </td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">275円</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td
                                        style="
                                        padding: 0 16px;
                                        width: 20%;
                                        display: inline-grid;
                                        align-items: center;
                                        justify-content: center;
                                        height: 47px;
                                        background-color: #f1f1f1;
                                        text-align: center;
                                        "
                                    >通話５分定額オプション
                                    </td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">275円</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">ー</td>
                                    <td style="width: 20%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">無</td>
                                </tr>
                            </tbody>
                            </table>
                            <div style="font-size: 12px; font-weight: 400; line-height: 24px">
                            <p>※1 音声オプションサービスは、My HISモバイルでお申込みください。</p>
                            <p>※2 転送先への通話料は別途かかります。</p>
                            <p>※3 国際電話の通話料は別途かかります。</p>
                            <p>※4 発信した通話の通話料は別途かかります。</p>
                            <p>※5 留守番電話とキャッチホンがまとめてご利用いただけます</p>
                            <p>※6 完全かけ放題オプションの詳細は、別紙資料をご確認ください。</p>
                            <p>※7 通話5分定額オプションの詳細は、別紙資料をご確認ください。</p>
                            </div>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">4G/5Gオプション</p>
                        </div>
                        <div style="font-size: 12px; font-weight: 400; line-height: 24px; margin-bottom: 20px">
                            <p>切り替えできる回数は1日につき、4Gから5G、5Gから4Gへの切り替えはそれぞれ一回ずつになります。</p>
                            <p>切り替えは無料です。</p>
                        </div>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">データオプション</p>
                        </div>
                        <table style="width: 100%; margin-bottom: 20px">
                            <thead>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: bold; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <th id="0" style="height: 47px; background: #f1f1f1; width: 50%; display: inline-grid; align-items: center; text-align: center;">データチャージ量</th>
                                    <th id="1" style="height: 47px; background: #f1f1f1; width: 50%; display: inline-grid; align-items: center; text-align: center;">料金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td rowspan="2" style="width: 50%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">1G</td>
                                    <td rowspan="2" style="width: 50%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">200円</td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">その他割引条件</p>
                        </div>
                        <table style="width: 100%; margin-bottom: 20px">
                            <thead>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: bold; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <th id="0" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">クーポンコード</p>
                                    </th>
                                    <th id="1" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">クーポン種類</p>
                                    </th>
                                    <th id="2" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">クーポン種類</p>
                                    </th>
                                    <th id="3" style="height: 47px; background: #f1f1f1; width: 25%; display: inline-grid; align-items: center">
                                    <p style="margin-top: -15px">割引額</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">XXXXXXXXXXXXXXX</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">商品のクーポン</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">定額</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">1,000円</td>
                                </tr>
                                <tr style="display: flex; flex-direction: row; font-size: 12px; font-weight: 400; line-height: 24px; border-bottom: 1px solid #d1d1d1">
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">YYYYYYYYYYYYYYYY</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">事務手数料</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">低率</td>
                                    <td style="width: 25%; display: inline-grid; align-items: center; justify-content: center; height: 47px; text-align: center;">１０％</td>
                                </tr>
                            </tbody>
                        </table>
                        <div>
                            <p style="padding-left: 5px; font-size: 16px; line-height: 16px; font-weight: bold; border-left: 4px solid #009cf3;">契約に関するお問い合わせ先</p>
                        </div>
                        <div style="font-size: 14px; line-height: 24px">
                            <div>HISモバイルヘルプデスク</div>
                            <div>メールアドレス ：<a href="mailto:consumer@cs.his-mobile.com" style="color: #009cf3">consumer@cs.his-mobile.com</a></div>
                            <div>サポートページ ：<a href="https://support.his-mobile.com/" style="color: #009cf3">https://support.his-mobile.com/</a>
                                <img style="float: right; width: 150px; height: auto;" src="{{ $logo }}" alt="logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>