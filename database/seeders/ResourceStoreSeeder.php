<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResourceStore;

class ResourceStoreSeeder extends Seeder
{
    public function run(): void
    {
         ResourceStore::insert([
            [
                'nombre' => 'Supermercado Metro',
                'estado' => 'Estable',
                'descripcion' => 'Suministros básicos disponibles',
                'imagen' => 'images/Metro.png',
                'sobre_tienda' => 'Metro es uno de los centros más grandes y seguros de la zona. Cuenta con amplia variedad de productos enlatados, agua embotellada, medicinas básicas y herramientas de supervivencia. La estructura está fortificada y hay presencia constante de supervivientes organizados que mantienen el orden. Se recomienda visitarlo durante el día.',
                'url_destino' => '/recursos/metro',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Plaza Vea',
                'estado' => 'Inestable',
                'descripcion' => 'Zona de alto riesgo, pocos recursos',
                'imagen' => 'images/PlazaVea.png',
                'sobre_tienda' => 'Plaza Vea está ubicada en una zona de alto riesgo con actividad constante de amenazas. Los recursos son limitados y ya han sido saqueados en su mayoría. Solo quedan algunos productos perecederos y suministros menores. Se requiere extrema precaución al visitarla. No se recomienda ir solo y evitar las horas nocturnas a toda costa.',
                'url_destino' => '/recursos/plazavea',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Tottus',
                'estado' => 'Estable',
                'descripcion' => 'Medicinas y alimentos enlatados',
                'imagen' => 'images/Tottus.jpg',
                'sobre_tienda' => 'Tottus se ha convertido en un punto estratégico para encontrar medicamentos y alimentos no perecederos. La farmacia aún mantiene un stock considerable de antibióticos, analgésicos y material de primeros auxilios. Los pasillos de conservas están medianamente abastecidos. El área está vigilada por un pequeño grupo de supervivientes médicos.',
                'url_destino' => '/recursos/tottus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Kosto',
                'estado' => 'Estable',
                'descripcion' => 'Agua embotellada y conservas',
                'imagen' => 'images/Kosto.jpg',
                'sobre_tienda' => 'Kosto es ideal para abastecerse de agua potable y productos al por mayor. Sus grandes depósitos aún contienen pallets de agua embotellada, conservas enlatadas y productos secos. Es una ubicación segura con buena visibilidad y múltiples salidas de emergencia. Perfecto para grupos que necesitan reabastecerse en grandes cantidades.',
                'url_destino' => '/recursos/kosto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Makro',
                'estado' => 'Inestable',
                'descripcion' => 'Gran cantidad pero zona peligrosa',
                'imagen' => 'images/Makro.jpg',
                'sobre_tienda' => 'Makro posee la mayor cantidad de recursos en un solo lugar, pero está situada en la zona más peligrosa de la ciudad. Grandes almacenes con comida, bebidas, equipos de cocina y herramientas industriales permanecen casi intactos, pero el área está infestada y es territorio disputado por bandas de saqueadores. Solo para los más experimentados y bien armados.',
                'url_destino' => '/recursos/makro',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Bodega Familiar',
                'estado' => 'Estable',
                'descripcion' => 'Pequeña pero segura',
                'imagen' => 'images/Bodega.jpg',
                'sobre_tienda' => 'Esta pequeña bodega familiar se ha mantenido como un refugio tranquilo y acogedor. Aunque tiene recursos limitados, ofrece artículos básicos como arroz, frijoles, aceite y productos de higiene personal. Los dueños originales dejaron suministros organizados y el lugar está limpio. Es perfecta para visitas rápidas y discretas sin llamar mucho la atención.',
                'url_destino' => '/recursos/bodega',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

