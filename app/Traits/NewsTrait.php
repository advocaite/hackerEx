<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait NewsTrait
{
    public function totalNews()
    {
        return DB::table('news')->count();
    }

    public function findAuthor($author)
    {
        switch ($author) {
            case 0:
            case -8:
                return 'Game news';
            case -1:
                return 'Numataka Corp';
            case -2:
                return 'FBI';
            case -5:
                return 'Clan Battle Advisor';
            default:
                return 'Unknown';
        }
    }

    private function getAuthorIP($author)
    {
        switch ($author) {
            case 0:
                return 'Unknown';
            case -1:
                return 'evilcorp ip'; //TODO
            case -2:
                return 'FBI'; //TODO
            default:
                return 'Unknown';
        }
    }

    private function news_history($id)
    {
        return DB::table('news_history')
            ->where('newsID', $id)
            ->select('infoDate', 'info1', 'info2')
            ->first();
    }

    private function getImage($authorID)
    {
        switch ($authorID) {
            case 0:
                return 'images/profile/tux.png';
            case -1:
                return 'images/profile/tux-ec.png';
            case -2:
                return 'images/profile/tux-fbi.png';
            case -3:
                return 'images/profile/tux-safenet.png';
            case -4:
                return 'images/profile/tux-clan2.png';
            case -5:
                return 'images/profile/tux-clan.png';
            case -6:
                return 'images/profile/tux-social.png';
            case -7:
                return 'images/profile/tux-badges.png';
            case -8:
                return 'images/profile/tux.png';
        }
    }

    private function getAuthorSpecifics($authorID)
    {
        switch ($authorID) {
            case 0: //game news
                return 'Game News';
                break;
            case -1: //evilcorp
                return '<FBIIP>';
                break;
            case -2:
                $player = new Player();
                $ranking = new Ranking();
                $newsHistory = $this->news_history($this->id);
                if (sizeof($newsHistory) > 0) {
                    $name = $player->getPlayerInfo($newsHistory->info1)->login;
                    $reputation = number_format($ranking->exp_getTotal($newsHistory->info1, 1));
                    $rank = number_format($ranking->getPlayerRanking($newsHistory->info1, 1));
                    return view('sections.news.author_specifics', ['name' => $name, 'reputation' => $reputation, 'rank' => $rank]);
                }
                break;
            case -5: //clan news
                $newsHistory = $this->news_history($this->id);
                if (sizeof($newsHistory) > 0) {
                    $clan = new Clan();
                    if (!$clan->issetClan($newsHistory->info1)) {
                        $winnerClanName = 'Unknown';
                        $rank = '?';
                    } else {
                        $clanInfo = $clan->getClanInfo($newsHistory->info1);
                        $winnerClanName = '[' . $clanInfo->nick . '] ' . $clanInfo->name;
                        $rank = $clanInfo->rank;
                    }
                    return view('sections.news.clan_specifics', ['winnerClanName' => $winnerClanName, 'rank' => $rank]);
                }
                break;
            default:
                return 'Unknown';
                break;
        }
    }

    public function listIndex($total)
    {
        $newsInfo = DB::table('news')
            ->select('id', 'title', 'date')
            ->orderByDesc('date')
            ->limit($total)
            ->get();

        return view('sections.news.news_list', ['newsInfo' => $newsInfo]);
    }

    public function news_add($author, $title, $content, $infoArray)
    {
        $newsId = DB::table('news')->insertGetId([
            'author' => $author,
            'title' => $title,
            'content' => $content,
            'date' => now()
        ]);

        DB::table('news_history')->insert([
            'newsID' => $newsId,
            'info1' => $infoArray[0],
            'info2' => $infoArray[1],
            'infoDate' => $infoArray[2]
        ]);
    }

    public function showNews($id)
    {
        $newsInfo = DB::table('news')
            ->where('id', $id)
            ->first();

        $author = $this->findAuthor($newsInfo->author);
        $authorIP = $this->getAuthorIP($newsInfo->author);
        $image = $this->getImage($newsInfo->author);

        $newsHistory = $this->news_history($id);

        $authorSpecifics = $this->getAuthorSpecifics($newsInfo->author);

        return view('sections.news.news_show', [
            'title' => $newsInfo->title,
            'content' => $newsInfo->content,
            'author' => $author,
            'authorIP' => $authorIP,
            'date' => $newsInfo->date,
            'image' => $image,
            'infoDate' => $newsHistory->infoDate,
            'info1' => $newsHistory->info1,
            'info2' => $newsHistory->info2,
            'authorSpecifics' => $authorSpecifics,
            'active-index' => 'active',
        ]);

    }

    public function newsIsset($id)
    {
        $newsInfo = DB::table('news')
            ->select('id', 'author', 'title', 'content', 'date', 'type')
            ->where('id', $id)
            ->first();

        if (!$newsInfo) {
            return false;
        }

        $this->id = $id;
        $this->author = $this->findAuthor($newsInfo->author);
        $this->authorID = $newsInfo->author;
        $this->title = $newsInfo->title;
        $this->content = $newsInfo->content;
        $this->date = $newsInfo->date;
        $this->type = $newsInfo->type;

        return true;
    }
}
