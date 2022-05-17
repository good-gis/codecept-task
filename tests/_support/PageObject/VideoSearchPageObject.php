<?php

namespace Codecept\_support\PageObject;

use Exception;

class VideoSearchPageObject extends BasePageObject
{
    public string $url = 'https://yandex.ru/video/';

    private string $searchButton = 'div.websearch-button__text';
    private string $previewImage = 'img.thumb-image__image';
    private string $trailer = 'div[class$="thumb-preview__target_playing"]';

    /**
     * @throws Exception
     */
    public function goPage(): void
    {
        $this->I->amOnUrl($this->url);
        $this->I->waitForElementVisible($this->searchButton);
    }

    /**
     * @throws Exception
     */
    public function searchVideo(string $videoName): void
    {
        $this->I->amOnUrl($this->getSearchVideoUrl($videoName));
        $this->I->waitForElementVisible($this->searchButton);
    }

    /**
     * @throws Exception
     */
    public function seePreviewImage(): void
    {
        $this->I->waitForElementVisible($this->previewImage);
    }

    public function moveMouseOverPreviewImage(): void
    {
        $this->I->moveMouseOver($this->previewImage);
    }

    /**
     * @throws Exception
     */
    public function seeTrailer(): void
    {
        $this->I->waitForElementVisible($this->trailer);
    }

    private function getSearchVideoUrl(string $videoName): string
    {
        return $this->url . 'search?' . http_build_query(['text' => $videoName]);
    }
}