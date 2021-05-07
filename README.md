<h4>SKATEBOARD REST API</h4>

Müvafiq databazanı yaratdıqdan sonra istifadə edə bilərsiniz.
Əvvəlcə terminalda seeder və faker ilə yaradılmış dataları <b>"php artisan migrate:fresh --seed"</b> commandı vasitəsilə databazaya gəndərin.

Endpointlər
- /api/products
Bu endpointə get sorğusu göndərməklə bazada olan bütün elementləri müvafiq rəng və tipləri ilə birlikdə hər səhifədə 15 ədəd olmaqla sıralaya bilərsiniz.

- /api/order
Bu endpointə post sorğusu göndərməklə müştəri yeni bir sifariş yarada bilər. Göndərilən data qeyd olunan formada tam validasiya olunur.

- /api/orders
Bu endpoint get metodu ilə bütün sifarişləri hər səhifədə 15 ədəd olmaqla sıralayır.

- /api/prepare_order
Bu endpointə put sorğusu göndərməklə satıcı müvafiq sifarişə hazırlanma və çatdırılma tarixini qeyd edir. Göndərilən data qeyd olunan formada tam validasiya olunur.

# Postman kimi api sorğuları göndərmək üçün istifadə olunan proqramlarda, sorğu göndərməzdən əvvəl header-də 'Accept: application/json' qaydaını qeyd etməyi unutmayın. Əks təqdirdə Post və Put metodu gözlənilən nəticəni verməyə bilər. #
