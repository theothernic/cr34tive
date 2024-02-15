<?php
    namespace App\Http\Controllers\Pages;

    use App\Http\Controllers\Controller;
    use App\View\Models\Pages\ContentPageViewModel;
    use Illuminate\View\View;

    class FrontpageController extends Controller
    {
        public function __invoke(): View
        {
            $page = new ContentPageViewModel([
                'title' => 'Welcome',
            ]);

            return $this->respondWithView('pages.frontpage', $page);
        }
    }
