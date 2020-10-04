@if ($key === "faction")
    <tr>
        <th scope="row">{{strtoupper($key)}}</th>
        <td>
            <img style="width: 23px" src="/storage/faction_images/{{$collection[$key]}}.png" alt="faction-icon">
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "class")
    <tr>
        <th scope="row">{{strtoupper($key)}}</th>
        <td>
            <img style="width: 23px" src="/storage/class_images/{{$collection[$key]}}.png" alt="class-icon">
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "hp")
    <tr>
        <th scope="row">
            <img style="width: 23px" src="https://lh3.googleusercontent.com/4iiJG7Ha2shQP-VcigumVzstgLBC1fxFk3jmtLSOE44p8fOZ0vtYFJtIwLlWrSZdYCDr87gpNouT9nFzQTsGVgBY1Uc5E2D8TlibsWIdbjpSP1qHEcPD8_yD3PF9VHwYQXEwJHUsXHIOqz03h8VmBdGPZcxspTyKpW7N0rqq7RfYmv7PqgnMcLf1xaIwM35dAbD73OYTf5lJld05i6CFsgWaz33wN5673DmfjDYsivw70GMLQAx4ptMTVO7oZGDzzm4MPOgjrRLlDN8RBb8PWOMuGr5_urVs1ke7m_kBXIzio2O0dT7nnpIwLUlb58RTJwm-1e1qPaj6Fy3sbId5A3YEt8nq_dzPo_R1rxONdxqr-1qgcKidtOUW7ZCPY2Cihb5OYwzd1L5sKbnnfVtCk_S3L5z2pp8xTqo1olPz-SUeX0LWwXk_660FsnubHQK8NVoEpwF2uEeQ4eTXi-dXGI7LVvry3oLsY3RH9NDwdJTsYU8qaZ0g9BLhkav2AcR8xJposazwcNUQoeztEkfN66Zyk_GDuf6YcH7ltu_OQXsxtVnYnFN5WP8aCLwh3nvDNuCijkgFSJrER9FlyekLqMXNzshqXW8t2KKKSZ2yvfbWOlo-NPVdSUS16PMrHrnxKCnGfqEV03iN2ujh65stTdkfn2Be_QLfJdJFOnT6pqSL6a2yRAlQ63ZZ3Fk=w20-h19-no?authuser=0" alt="attribute-icon">
            {{strtoupper($key)}}
        </th>
        <td>
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "atk")
    <tr>
        <th scope="row">
            <img style="width: 23px" src="https://lh3.googleusercontent.com/t3G-hd0UYeBALi-DR-17ClFBDOCujbrnBTlMq0YHqzaFwo4IovdnGQHeb9cM7fXgA6eE9Jz49-wAK4ax73j6yPgrUpACZ58KbllJVFw_Mgo1Z8i057myeTsGXO1Qg5cCgUIXsYiF2mbzs-zgH6TqN9lH1lE0GhLqh4brXoAPje0N-_m0ujg9iWfJ6UpAZlvMR0gmgB2D33rjuZU0fG7rpgRuk52jvJ2vX3wifycpDLKrTSqyjYVBnfKgxPKz6AgN0dwLuRBcpkQtaKKfYRcAgKBDmBkiUdDRKRUKZozJXfHdavQLIbVGUooLHBnmdilsAAoHObd91U2RUUJQ_Ifm9zqapwoFd5sKFKaTwaa878z1JTh4LczZKhJKzcIsUz6cmRvA0QQ_IjsbtTIbDCCDo2Hci3WBOsN4nepBHAfJnJkgRmVpXTnk5GVWI2WZr-3qPSlzysKTWfvihyL5wwX92zv2bPT8GvOj6IIQUhD7zTnfmG7BRwxBoCa5MFKAzVFt4u0GsL6OnJqoKJ-kBW7XyHSrf3yUgDPhU8QI45ExYRjG8CjAMhS9tGwoa-uJ2SkvTNPtu0JikNyGeEjIEYHlns8EkFMofVon9YizNMaGe9uQvf8kXd-PmvndtzxeFSK0Aa_8cDAr0k6lQlATw24HkfNb2u2WMfz0eHmFVkH4FsaWCjfnfCcnunejT6Y=w20-h19-no?authuser=0" alt="attribute-icon">
            {{strtoupper($key)}}
        </th>
        <td>{{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "armor")
    <tr>
        <th scope="row">
            <img style="width: 23px" src="https://lh3.googleusercontent.com/qY15_-v-515xntIQv8yBz30v395qak2czO2qINCKZ0gBdYJMm9-O9e2yjL-s9br5UFCkPJa8aJpIOf8YMxID8I6KUXeoqcd0isvx46d7M-AXqtpjv6DAwkuZo72Kv9-82oyKn4WKbxk2VGyUJU7Szc4sayYjP5dOFkVJo6pl2SVD7iOdhOgOJNdFNi8P9UMonKhU-RmbCBzBi5d2Lh5CIdVA4DDBZzWcquUnOQGb149aTG2UoMp2Lh2Et-hmP0I7zx9nJ-1S1zNwb7V6DAYX97Y_TNZm8Ro3wjLiMU3oHGNN-2i7ysbtFVLeDi7BkGL_9I5PV8Olfc0v16S3iFeoIhrQK986hS6P54m2M7o4BHn61ff8BHYjGhQh8Y5a3k5t1KeuwKw0oaxvJc-93PNzsgIdzQ-oNfX12HJB6Nhv5lAa6SNPuvmUttf4UVoGKV7Pl6Gqp1VU8p6J6BdkHOGtYKBBodpifKb0X6Yduo_SB3Nv8ZALuO7RJF3mxPkfbbtAQSirnIdHaUZk4UsmhCgoGra0SfxA5mjf7L1_pG4TMkNJPzDqxaSBbxUQWSWp9UPyjShQiKhHwxQn9xc0g8jYy2BJiL-LeCKMXvE1yLYSpZNrdZ0rORl_L7UvIu2I-qV-7xnMdI7N9euuwMTkqaESWJjHX6smiCy3dJTbAc1WpirVfX1G2sTcHHN5rhM=w20-h19-no?authuser=0" alt="attribute-icon">
            {{strtoupper($key)}}
        </th>
        <td>
            {{$collection[$key]}}
        </td>
    </tr>
@elseif($key === "speed")
    <tr>
        <th scope="row">
            <img style="width: 23px" src="https://lh3.googleusercontent.com/8lzYmd2JVWvmExsSt7Uy7NhaISbgX2x_ho7sQGy_GvS7cfUYeRS4cZ-0ezzZub8UBbM4GxQoX017Uavemar82hZ-SdMpu96busxG-GwtNd8NVnnlWwx84VERSIUbj4nBAzDyqHqiyW6277Cd0JL-KJaR3mCo113A7CWwJLcqw7inJHc7LZ73rpB46KwhliGaUrAVew0x3DrD5avbSFzWYJvbN1IL-2jwxh70I-59DvrxjQv3fpmi6WZHs6YwNp_STryzcZf6AqBNsfS1KlD2uN1zSMQHNJ71_iEQbln8craI-58b9cfY_xGCdEBSvOxj3JZMj9SjOtN4_1qVPluL4SyvXdskXB8nKG-myB4joLa9rUBysv6XWtBuq6hzgwaGmZKhwpodIvL-ffldAyeP7gTj02pvijNoFP1VtUIcUOCmebu5-AKj-yZTpOaFdt68cnkhrHVm0UYbyjhuX1k_UU7IFqNOfPs11eEftrwgvDKTI1jly0U_1Kg7uSGHE0Ya0Dxfr3h-_iK2o2i6HJIZR9Uz_2JtmSFAqV-2R1dSml8ZFJhPEuBcJ35l7nLgutW5kYYF5SVazHIAOMtK1KtZvEei8MjaevsBvz7_cbi7VFKwGldgj6vGqX4i9PlYh7Piwh8ditn5Klb6717dgSgySx08EsVLcRCTu8W1BKR2C2_NpV5bNjdjz1wAoRw=w20-h19-no?authuser=0" alt="attribute-icon">
            {{strtoupper($key)}}</th>
        <td>
            {{$collection[$key]}}
        </td>
    </tr>
@else
    <tr>
        <th scope="row">{{strtoupper($key)}}</th>
        <td>{{$collection[$key]}}</td>
    </tr>
@endif