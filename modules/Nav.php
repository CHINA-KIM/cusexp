<?php
require_once 'univarpool.php';
global $address_tra,$email_tra,$phone_tra;
$address = $address_tra;
$email = $email_tra;
$phone = $phone_tra;
$Nav =
    "<div class=\"container-fluid bg-white py-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 text-left mb-3 mb-lg-0\">
                <div class=\"d-inline-flex text-left\">
                    <h1 class=\"flaticon-office font-weight-normal text-primary m-0 mr-3\"></h1>
                    <div class=\"d-flex flex-column\">
                        <h5>公司地址</h5>
                        <p class=\"m-0\">{$address}</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 text-left text-lg-center mb-3 mb-lg-0\">
                <div class=\"d-inline-flex text-left\">
                    <h1 class=\"flaticon-email font-weight-normal text-primary m-0 mr-3\"></h1>
                    <div class=\"d-flex flex-column\">
                        <h5>電子郵件</h5>
                        <p class=\"m-0\">{$email}</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 text-left text-lg-right mb-3 mb-lg-0\">
                <div class=\"d-inline-flex text-left\">
                    <h1 class=\"flaticon-telephone font-weight-normal text-primary m-0 mr-3\"></h1>
                    <div class=\"d-flex flex-column\">
                        <h5>聯係我們</h5>
                        <p class=\"m-0\">{$phone}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";

