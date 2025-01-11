<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function erp()
    {
        $title = 'ERP導入服務';
        $description = 'ERP導入服務提供企業全面的系統整合方案，協助企業提升運營效率、降低成本，並實現資源的最佳化配置。';

        return view('frontend.service.erp', compact('title', 'description'));
    }

    public function project()
    {
        $title = '專案開發';
        $description = '專案開發涵蓋軟體設計、系統開發及整合測試，為企業提供高效解決方案。';

        return view('frontend.service.project', compact('title', 'description'));
    }

    public function software()
    {
        $title = '軟體銷售';
        $description = '提供多元化的軟體解決方案，滿足企業各項資訊應用需求。';

        return view('frontend.service.software', compact('title', 'description'));
    }

    public function server()
    {
        $title = '機房規劃建置';
        $description = '專業的機房規劃與建置服務，確保企業資訊系統的穩定運作。';

        return view('frontend.service.server', compact('title', 'description'));
    }

    public function outsourcing()
    {
        $title = '資訊委外服務';
        $description = '提供全方位IT服務，協助企業降低營運成本，專注核心業務發展。';

        return view('frontend.service.outsourcing', compact('title', 'description'));
    }

    public function hardware()
    {
        $title = '硬體銷售';
        $description = '提供優質的硬體設備銷售服務，滿足企業各種硬體需求。';

        return view('frontend.service.hardware', compact('title', 'description'));
    }
}
