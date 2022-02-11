<?php

namespace App\Controller\Front;

use App\Repository\ItemRepository;
use App\Repository\TypeRepository;
use App\Repository\MediaRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    /**
     * Allows you to display the result of a search
     * 
     * @Route("/recherche", name="search_term_results")
     */
    public function searchTermResults(Request $request, MediaRepository $mediaRepository, ItemRepository $itemRepository, TypeRepository $typeRepository): Response
    {
        // Retrieving the search term
        $searchTerm = $request->get('searchTerm');
        // Retrieval of the media corresponding to the search term using the method set up in the MediaRepository
        $mediasSearchTermResults = $mediaRepository->findAllMediaBySearchTerm($searchTerm);
        // Retrieval of the item corresponding to the search term using the method set up in the ItemRepository
        $itemsSearchTermResults = $itemRepository->findAllItemBySearchTerm($searchTerm);

        return $this->render('front/search/search_term_results.html.twig', [
            'mediasSearchTermResults' => $mediasSearchTermResults,
            'itemsSearchTermResults' => $itemsSearchTermResults,
            'searchTerm' => $searchTerm,
            'types' => $typeRepository->findBY([], ['name' => 'ASC']),
        ]);
    }

    /**
     * Allows you to display the result of a filtering by year
     * 
     * @Route("/filtre/année", name="year_filter")
     */
    public function filterByYearResults(Request $request, MediaRepository $mediaRepository, ItemRepository $itemRepository, TypeRepository $typeRepository): Response
    {

        $filterYear = $request->get('filterYear');
        $mediasFilterYearResults = $mediaRepository->findAllMediaFilterByYear($filterYear);
        $itemsFilterYearResults = $itemRepository->findAllItemFilterByYear($filterYear);

        return $this->render('front/search/year_filter.html.twig', [
            'mediasFilterYearResults' => $mediasFilterYearResults,
            'itemsFilterYearResults' => $itemsFilterYearResults,
            'filterYear' => $filterYear,
            'types' => $typeRepository->findBY([], ['name' => 'ASC']),
        ]);
    }

    /**
     * Allows you to display the result of a filtering by type
     * 
     * @Route("/filtre/type", name="type_filter")
     */
    public function filterByTypeResults(Request $request, MediaRepository $mediaRepository, ItemRepository $itemRepository, TypeRepository $typeRepository): Response
    {

        $filterType = $request->get('filterType');
        $mediasFilterTypeResults = $mediaRepository->findAllMediaFilterByType($filterType);

        return $this->render('front/search/type_filter.html.twig', [
            'mediasFilterTypeResults' => $mediasFilterTypeResults,
            'filterType' => $filterType,
            'types' => $typeRepository->findBY([], ['name' => 'ASC']),
        ]);
    }

}
