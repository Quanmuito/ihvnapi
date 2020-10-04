<?php

namespace App\Variables;

class ImageVariables 
{
    public $attributes;
    public $factions;
    public $class;

    public function __construct()
    {
        $this->setFactions();
        $this->setClass();
        $this->setAttributes();
    }

    public function setFactions()
    {
        $this->factions = [
            'shadow' => 'https://lh3.googleusercontent.com/pw/ACtC-3cfhPET3MEbvtagxb8uYA0xXLpdHDudJBeVd3URxCg6y6GBtTDOErp0v2mQWEq5ZfC9TVsp3SriEBTqPuz7gGJRZxuVd3vkS0tN6wTwplKhydGB60DlMdU2O19p-v3K5mTzSYAupDYZTnvtjGqlumI=s40-no?authuser=0',
            'fortress' => 'https://lh3.googleusercontent.com/pw/ACtC-3fPHAfbVC_G8MqpY9CDMBg6RlQdJdU5jhfpMcogHQlvKaWdkquDk9NXSS8ia_VhM_BtYsluC18wh_76sN10TbO4PiOdXeqFRNIxr5EI76DiV6lWELAAGO6tAsydTSbPhjwEl7NA1b2p538OdgCONis=s40-no?authuser=0',
            'albyss' => 'https://lh3.googleusercontent.com/pw/ACtC-3dpIam7nkqdz09qbCugWGPNV7l0fKceB_rGlaClIpeIekp4DtG5lff-ErRZ2yTNbESQ1FOmLa79OHQYL_llAjUuaeQANIVI7fTsI8Rjum4sAYv1LQFqESXTuX-4gND3Rv262wQlzAqQfcEFoFfqQxY=s40-no?authuser=0',
            'forest' => 'https://lh3.googleusercontent.com/pw/ACtC-3eWYypGuIAuJZbxjzLNhW5GmQf6874fJMx60xDmWvB0wHqNuE-N6XPzz59jk_Ttev6ZI78UAECKK2Cwoxd41bZLNnLjpSvhaWa5-sfdxQeGAmvuZ-AtTU6BX8nBmx-u-fQ5eMvJpDg8fNVXjKX-N0I=s40-no?authuser=0',
            'light' => 'https://lh3.googleusercontent.com/pw/ACtC-3d59WZv4-4VNyLWlopSr3mj0Mb3WnWuLbWN9HoeihuzYPM-t7aUi6WwVjfUJtjZPu68j37QABusKOw0R_-SkNHkb6BtBRxCsKRqx7ziYIqQrUyiWuaTHYJ2ugzXG7mp-hMWagRUT-Cubo5lyuCBGe0=s40-no?authuser=0',
            'dark' => 'https://lh3.googleusercontent.com/pw/ACtC-3dxa2Ta7WA2WmMxw4cylPC_klUflElt3lYQB9U3ne3VFPHxxDAlTsd7tr7VwqUtVUIP8pfWLNYZtPUT2CpV2po9qwnuQ4_X2F2xpopFteHXAOLCtcTUkHH59dgEpsWU_mq75lw_zM7TWpm4_46V6CI=s40-no?authuser=0',
            'void' => 'https://lh3.googleusercontent.com/pw/ACtC-3dZVrhpz-8ckwoauInQR54k8GU52FIA0HFpbm-uqGtaNIg4xciJGA5gtq1vP0sqtTFXhMvkBH16cFtCqP_XUFgoAKSZLyZGD5QOVtDEuEvwGWIzJuw91bYAcnUzBMaiTWJkj2H1iatZcDyZfu87Hqo=s207-no?authuser=0',
        ];
    }

    public function setClass()
    {
        $this->class = [
            'warrior' => 'https://lh3.googleusercontent.com/pw/ACtC-3ey4bZeG6OK2ja2eIu5akbPymH6yAoivJNV50HyfdD2dXd6F7UpqVpzblTyvC22L3xwQ0bTKrNw5uyIc_Xey1_kxr7kvmKbAQns3BbYRsbGpOOKfxpVqtYa4CrXR98lNjHCw3Z5jgyruR0tkE-5Ba0=s28-no?authuser=0',
            'mage' => 'https://lh3.googleusercontent.com/pw/ACtC-3e_Qk9NhxROPoFp7bS6RJ0xnUmYEAJ0ur1-PHndoRjMiGlEO88URpJVN1f8qmFFqOzl-nXfCWf0mb60qncJhcsSIYjXv7ExC5slLVtLXeCtqSK38GcFQ0IG8hSaCkDgvjqsWjPEt5fWvjIj59fQfbo=s28-no?authuser=0',
            'ranger' => 'https://lh3.googleusercontent.com/pw/ACtC-3cgJe2LQjNDOCzlXYo34qpXEawT1mznY1G3t_yVPIvjnJtIXUdIRIZIN4rTPNYvIVx8gCsLdq_lJMB6lpNpRLkBZ9YRRRkgFAmMa3ZPMuYk7O_rPLuG7OKKABRJiSwHiEjKQqfXeY1xhYblFERjQ0g=s28-no?authuser=0',
            'assasin' => 'https://lh3.googleusercontent.com/pw/ACtC-3eEwcW4cMMXj50gtwWowkyZs1A1aFRAfeMvZxn90g__gvVkP4TZayTwgrVBqUHvfhpHrO5uiwTOZNViCla61i1PsHhD1IDxAgPpkYby8VYDAS9EMTpZ_SxTAMFo6C96DlYsKEPFToCdJOXwc1OZ45Y=s28-no?authuser=0',
            'priest' => 'https://lh3.googleusercontent.com/pw/ACtC-3cNuE2Gtrh2l_P1WBm4W3xw8pRLuTOw4NrYFxpuBeH22JdMIFbMEXsIxB2zmAC2xiuGYM0V8M3kJC8HYtylTnC-BDqXHeNMqjox4gTGfNGNwRl39Z8MKv6XP_jZF5d0Hb889kBuaRHxcY0BP94pizY=s28-no?authuser=0',
        ];
    }

    public function setAttributes()
    {
        $this->attributes = [
            'hp' => 'https://lh3.googleusercontent.com/4iiJG7Ha2shQP-VcigumVzstgLBC1fxFk3jmtLSOE44p8fOZ0vtYFJtIwLlWrSZdYCDr87gpNouT9nFzQTsGVgBY1Uc5E2D8TlibsWIdbjpSP1qHEcPD8_yD3PF9VHwYQXEwJHUsXHIOqz03h8VmBdGPZcxspTyKpW7N0rqq7RfYmv7PqgnMcLf1xaIwM35dAbD73OYTf5lJld05i6CFsgWaz33wN5673DmfjDYsivw70GMLQAx4ptMTVO7oZGDzzm4MPOgjrRLlDN8RBb8PWOMuGr5_urVs1ke7m_kBXIzio2O0dT7nnpIwLUlb58RTJwm-1e1qPaj6Fy3sbId5A3YEt8nq_dzPo_R1rxONdxqr-1qgcKidtOUW7ZCPY2Cihb5OYwzd1L5sKbnnfVtCk_S3L5z2pp8xTqo1olPz-SUeX0LWwXk_660FsnubHQK8NVoEpwF2uEeQ4eTXi-dXGI7LVvry3oLsY3RH9NDwdJTsYU8qaZ0g9BLhkav2AcR8xJposazwcNUQoeztEkfN66Zyk_GDuf6YcH7ltu_OQXsxtVnYnFN5WP8aCLwh3nvDNuCijkgFSJrER9FlyekLqMXNzshqXW8t2KKKSZ2yvfbWOlo-NPVdSUS16PMrHrnxKCnGfqEV03iN2ujh65stTdkfn2Be_QLfJdJFOnT6pqSL6a2yRAlQ63ZZ3Fk=w20-h19-no?authuser=0',
            'atk' => 'https://lh3.googleusercontent.com/t3G-hd0UYeBALi-DR-17ClFBDOCujbrnBTlMq0YHqzaFwo4IovdnGQHeb9cM7fXgA6eE9Jz49-wAK4ax73j6yPgrUpACZ58KbllJVFw_Mgo1Z8i057myeTsGXO1Qg5cCgUIXsYiF2mbzs-zgH6TqN9lH1lE0GhLqh4brXoAPje0N-_m0ujg9iWfJ6UpAZlvMR0gmgB2D33rjuZU0fG7rpgRuk52jvJ2vX3wifycpDLKrTSqyjYVBnfKgxPKz6AgN0dwLuRBcpkQtaKKfYRcAgKBDmBkiUdDRKRUKZozJXfHdavQLIbVGUooLHBnmdilsAAoHObd91U2RUUJQ_Ifm9zqapwoFd5sKFKaTwaa878z1JTh4LczZKhJKzcIsUz6cmRvA0QQ_IjsbtTIbDCCDo2Hci3WBOsN4nepBHAfJnJkgRmVpXTnk5GVWI2WZr-3qPSlzysKTWfvihyL5wwX92zv2bPT8GvOj6IIQUhD7zTnfmG7BRwxBoCa5MFKAzVFt4u0GsL6OnJqoKJ-kBW7XyHSrf3yUgDPhU8QI45ExYRjG8CjAMhS9tGwoa-uJ2SkvTNPtu0JikNyGeEjIEYHlns8EkFMofVon9YizNMaGe9uQvf8kXd-PmvndtzxeFSK0Aa_8cDAr0k6lQlATw24HkfNb2u2WMfz0eHmFVkH4FsaWCjfnfCcnunejT6Y=w20-h19-no?authuser=0',
            'armor' => 'https://lh3.googleusercontent.com/qY15_-v-515xntIQv8yBz30v395qak2czO2qINCKZ0gBdYJMm9-O9e2yjL-s9br5UFCkPJa8aJpIOf8YMxID8I6KUXeoqcd0isvx46d7M-AXqtpjv6DAwkuZo72Kv9-82oyKn4WKbxk2VGyUJU7Szc4sayYjP5dOFkVJo6pl2SVD7iOdhOgOJNdFNi8P9UMonKhU-RmbCBzBi5d2Lh5CIdVA4DDBZzWcquUnOQGb149aTG2UoMp2Lh2Et-hmP0I7zx9nJ-1S1zNwb7V6DAYX97Y_TNZm8Ro3wjLiMU3oHGNN-2i7ysbtFVLeDi7BkGL_9I5PV8Olfc0v16S3iFeoIhrQK986hS6P54m2M7o4BHn61ff8BHYjGhQh8Y5a3k5t1KeuwKw0oaxvJc-93PNzsgIdzQ-oNfX12HJB6Nhv5lAa6SNPuvmUttf4UVoGKV7Pl6Gqp1VU8p6J6BdkHOGtYKBBodpifKb0X6Yduo_SB3Nv8ZALuO7RJF3mxPkfbbtAQSirnIdHaUZk4UsmhCgoGra0SfxA5mjf7L1_pG4TMkNJPzDqxaSBbxUQWSWp9UPyjShQiKhHwxQn9xc0g8jYy2BJiL-LeCKMXvE1yLYSpZNrdZ0rORl_L7UvIu2I-qV-7xnMdI7N9euuwMTkqaESWJjHX6smiCy3dJTbAc1WpirVfX1G2sTcHHN5rhM=w20-h19-no?authuser=0',
            'speed' => 'https://lh3.googleusercontent.com/8lzYmd2JVWvmExsSt7Uy7NhaISbgX2x_ho7sQGy_GvS7cfUYeRS4cZ-0ezzZub8UBbM4GxQoX017Uavemar82hZ-SdMpu96busxG-GwtNd8NVnnlWwx84VERSIUbj4nBAzDyqHqiyW6277Cd0JL-KJaR3mCo113A7CWwJLcqw7inJHc7LZ73rpB46KwhliGaUrAVew0x3DrD5avbSFzWYJvbN1IL-2jwxh70I-59DvrxjQv3fpmi6WZHs6YwNp_STryzcZf6AqBNsfS1KlD2uN1zSMQHNJ71_iEQbln8craI-58b9cfY_xGCdEBSvOxj3JZMj9SjOtN4_1qVPluL4SyvXdskXB8nKG-myB4joLa9rUBysv6XWtBuq6hzgwaGmZKhwpodIvL-ffldAyeP7gTj02pvijNoFP1VtUIcUOCmebu5-AKj-yZTpOaFdt68cnkhrHVm0UYbyjhuX1k_UU7IFqNOfPs11eEftrwgvDKTI1jly0U_1Kg7uSGHE0Ya0Dxfr3h-_iK2o2i6HJIZR9Uz_2JtmSFAqV-2R1dSml8ZFJhPEuBcJ35l7nLgutW5kYYF5SVazHIAOMtK1KtZvEei8MjaevsBvz7_cbi7VFKwGldgj6vGqX4i9PlYh7Piwh8ditn5Klb6717dgSgySx08EsVLcRCTu8W1BKR2C2_NpV5bNjdjz1wAoRw=w20-h19-no?authuser=0',
        ];
    }
}