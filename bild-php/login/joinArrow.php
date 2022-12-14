<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->

    <main id="contents">
        <section id="joinCont">
            <h2 class="ir_so">회원가입 컨텐츠</h2>
            <article class="content-article">
                <div class="member-form">
                    <div class="joinArrow">
                        <img src="../assets/img/logo.png" alt="로고이미지">
                        <div class="info-wrap">
                            <div class="info-icon">
                                <img src="../assets/img/checkicon@2x.png" alt="아이콘" class="checkicon">
                                <h4 class="arrow">이용약관</h4>
                            </div>
                            <form name="join" action="join.php" method="POST">
                                <fieldset>
                                    <legend class="ir_so">이용약관 체크폼</legend>
                                    <div class="info mt10">
                                        <p>
                                            제1조(목적) 이 약관은 Bild 가 운영하는 Bild(이하 "빌드"라 한다)에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 한다)를 이용함에 있어 사이버 Bild와 이용자의 권리․의무 및 책임사항을 규정함을 목적으로 합니다.<br>
                                            ※「PC통신, 무선 등을 이용하는 전자상거래에 대해서도 그 성질에 반하지 않는 한 이 약관을 준용합니다.」<br>

                                            제2조(정의)<br>
                                            ① "Bild"이란 "빌드" 회사가 재화 또는 용역(이하 "재화 등"이라 함)을 이용자에게 제공하기 위하여 컴퓨터 등 정보통신설비를 이용하여 재화 등을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버Bild를 운영하는 사업자의 의미로도 사용합니다.<br>
                                            ② "이용자"란 "Bild"에 접속하여 이 약관에 따라 "Bild"가 제공하는 서비스를 받는 회원 및 비회원을 말합니다.<br>
                                            ③ '회원'이라 함은 "Bild"에 회원등록을 한 자로서, 계속적으로 "Bild"가 제공하는 서비스를 이용할 수 있는 자를 말합니다.<br>
                                            ④ '비회원'이라 함은 회원에 가입하지 않고 "Bild"가 제공하는 서비스를 이용하는 자를 말합니다.<br>

                                            제3조 (약관 등의 명시와 설명 및 개정)<br>
                                            ① "Bild"는 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호․모사전송번호․전자우편주소, 사업자등록번호, 통신판매업 신고번호, 개인정보관리책임자등을 이용자가 쉽게 알 수 있도록 00 사이버Bild의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.<br>
                                            ② "Bild"는 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회․배송책임․환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.<br>
                                            ③ "Bild"는 「전자상거래 등에서의 소비자보호에 관한 법률」, 「약관의 규제에 관한 법률」, 「전자문서 및 전자거래기본법」, 「전자금융거래법」, 「전자서명법」, 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」, 「방문판매 등에 관한 법률」, 「소비자기본법」 등 관련 법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.<br>
                                            ④ "Bild"가 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 Bild의 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다. 다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다.  이 경우 "Bild"는 개정 전 내용과 개정 후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.<br>
                                            ⑤ "Bild"가 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정 전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간 내에 "Bild"에 송신하여 "Bild"의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.<br>
                                            ⑥ 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자 보호지침 및 관계법령 또는 상관례에 따릅니다.<br>

                                            제4조(서비스의 제공 및 변경)<br>
                                            ① "Bild"는 다음과 같은 업무를 수행합니다. 1. 재화 또는 용역에 대한 정보 제공 및 구매계약의 체결  2. 구매계약이 체결된 재화 또는 용역의 배송  3. 기타 "Bild"이 정하는 업무<br>
                                            ② "Bild"는 재화 또는 용역의 품절 또는 기술적 사양의 변경 등의 경우에는 장차 체결되는 계약에 의해 제공할 재화 또는 용역의 내용을 변경할 수 있습니다. 이 경우에는 변경된 재화 또는 용역의 내용 및 제공일자를 명시하여 현재의 재화 또는 용역의 내용을 게시한 곳에 즉시 공지합니다.<br>
                                            ③ "Bild"가 제공하기로 이용자와 계약을 체결한 서비스의 내용을 재화등의 품절 또는 기술적 사양의 변경 등의 사유로 변경할 경우에는 그 사유를 이용자에게 통지 가능한 주소로 즉시 통지합니다.<br>
                                            ④ 전항의 경우 "Bild"는 이로 인하여 이용자가 입은 손해를 배상합니다. 다만, "Bild"가 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.<br>

                                            제5조(서비스의 중단)<br>
                                            ① "Bild"는 컴퓨터 등 정보통신설비의 보수점검․교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다.<br>
                                            ② "Bild"는 제1항의 사유로 서비스의 제공이 일시적으로 중단됨으로 인하여 이용자 또는 제3자가 입은 손해에 대하여 배상합니다. 단, "Bild"가 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.<br>
                                            ③ 사업종목의 전환, 사업의 포기, 업체 간의 통합 등의 이유로 서비스를 제공할 수 없게 되는 경우에는 "Bild"는 제8조에 정한 방법으로 이용자에게 통지하고 당초 "Bild"에서 제시한 조건에 따라 소비자에게 보상합니다. 다만, "Bild"가 보상기준 등을 고지하지 아니한 경우에는 이용자들의 마일리지 또는 적립금 등을 "Bild"에서 통용되는 통화가치에 상응하는 현물 또는 현금으로 이용자에게 지급합니다.<br>
                                        </p>
                                    </div>
                                    <div class="info-check">
                                        <label>
                                            <input type="checkbox" name="youCheck" class="checkBox" required />
                                        </label>
                                        <h3>이용약관에 동의합니다.</h3>
                                    </div>
                                    <div class="info-wrap">
                                        <div class="info-icon">
                                            <img src="../assets/img/checkicon@2x.png" alt="아이콘" class="checkicon">
                                            <h4 class="arrow">개인정보 수집 및 이용</h4>
                                        </div>
                                        <div class="info mt10">
                                            <p>
                                                이용자의 개인정보 수집시 서비스제공을 위하여 필요한 범위에서 최소한의 개인정보를 수집합니다.<br>
                                                회원가입시 구매계약이행에 필요한 정보를 미리 수집하지 않습니다. 다만, 관련 법령상 의무이행을 위하여 구매계약 이전에 본인확인이 필요한 경우로서 최소한의 특정 개인정보를 수집하는 경우에는 그러하지 아니합니다.<br>
                                                이용자의 개인정보를 수집·이용하는 때에는 당해 이용자에게 그 목적을 고지하고 동의를 받습니다.<br>
                                                수집된 개인정보를 목적외의 용도로 이용할 수 없으며, 새로운 이용목적이 발생한 경우 또는 제3자에게 제공하는 경우에는 이용·제공단계에서 당해 이용자에게 그 목적을 고지하고 동의를 받습니다. 다만, 관련 법령에 달리 정함이 있는 경우에는 예외로 합니다.<br>
                                                이용자의 동의를 받아야 하는 경우에는 개인정보관리 책임자의 신원(소속, 성명 및 전화번호, 기타 연락처), 정보의 수집목적 및 이용목적, 제3자에 대한 정보제공 관련사항(제공받은자, 제공목적 및 제공할 정보의 내용) 등 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」 제22조제2항이 규정한 사항을 미리 명시하거나 고지해야 하며 이용자는 언제든지 이 동의를 철회할 수 있습니다.<br>
                                                이용자는 언제든지 “몰”이 가지고 있는 자신의 개인정보에 대해 열람 및 오류정정을 요구할 수 있으며 이에 대해 지체 없이 필요한 조치를 취할 의무를 집니다. 이용자가 오류의 정정을 요구한 경우에는 그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다.<br>
                                                는 개인정보 보호를 위하여 이용자의 개인정보를 취급하는 자를  최소한으로 제한하여야 하며 신용카드, 은행계좌 등을 포함한 이용자의 개인정보의 분실, 도난, 유출, 동의 없는 제3자 제공, 변조 등으로 인한 이용자의 손해에 대하여 모든 책임을 집니다.<br>
                                                그로부터 개인정보를 제공받은 제3자는 개인정보의 수집목적 또는 제공받은 목적을 달성한 때에는 당해 개인정보를 지체 없이 파기합니다.<br>
                                                개인정보의 수집·이용·제공에 관한 동의 란을 미리 선택한 것으로 설정해두지 않습니다. 또한 개인정보의 수집·이용·제공에 관한 이용자의 동의거절시 제한되는 서비스를 구체적으로 명시하고, 필수수집항목이 아닌 개인정보의 수집·이용·제공에 관한 이용자의 동의 거절을 이유로 회원가입 등 서비스 제공을 제한하거나 거절하지 않습니다.<br>
                                                법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 이 약관이 정하는 바에 따라 지속적이고, 안정적으로 재화․용역을 제공하는데 최선을 다하여야 합니다.<br>
                                                이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 갖추어야 합니다.<br>
                                                상품이나 용역에 대하여 「표시․광고의 공정화에 관한 법률」 제3조 소정의 부당한 표시․광고행위를 함으로써 이용자가 손해를 입은 때에는 이를 배상할 책임을 집니다.<br>
                                                이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.<br>
                                            </p>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="info-check">
                                    <label>
                                        <input type="checkbox" name="youCheck" class="checkBox" required />
                                    </label>
                                    <h3>이용약관에 동의합니다.</h3>
                                </div>
                                <button id="arrow-btn" type="submit" value="저장하기" class="btn_submit3"><a href="../login/join.php">next</a></button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->

    <footer id="subFooter">
        <?php
            include "../include/subFooter.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>