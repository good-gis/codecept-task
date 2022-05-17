<?php

namespace Codecept;

use AcceptanceTester;
use Codecept\_support\PageObject\VideoSearchPageObject;
use Exception;

/**
 * @group testTask
 */
class VideoPreviewCest
{
    private VideoSearchPageObject $videoSearchPO;

    public function _before(AcceptanceTester $I)
    {
        $this->videoSearchPO = new VideoSearchPageObject($I);
    }

    /**
     * @throws Exception
     */
    public function testVideosHaveTrailers(AcceptanceTester $I)
    {
        $I->wantToTest('Videos have the trailers');

        $I->amGoingTo('Find videos with tornado');
        $this->videoSearchPO->searchVideo('tornado');

        $I->amGoingTo('Hover cursor over any video');
        $this->videoSearchPO->seePreviewImage();
        $this->videoSearchPO->moveMouseOverPreviewImage();

        $I->amGoingTo('Check trailer is playing');
        $this->videoSearchPO->seeTrailer();
    }
}