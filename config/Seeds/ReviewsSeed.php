<?php
use Migrations\AbstractSeed;

/**
 * Reviews seed.
 */
class ReviewsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'review_id' => 1,
                'review_score' => 5,
                'review' => 'This book is undoubtedly one of Austen\'s most promising genius. It takes time to get into the tone of the novel, but hold on! It is worth it. 
It is a little difficult to catch and even appreciate the subtle humour, irony and wit that characterises her writing style but it gradually falls in line. 
The characters in Emma are life like and extensions of the society we inhabit. They are good natured people and not entirely flawless. 
As for the protagonist, she is wonderfully alive, mischievous at times. It\'s advisable to relate in her our own follies and laugh up our sleeves as we can. 
A bildungsroman, with shades of romance gives it a very subdued autumnal trance and conjures up a feeling of warmth and satisfaction in the readers. 
I highly recommend this. And I suggest you to be as open to other people\'s faults as we are to our own. Happy reading!
',
                'review_date' => '2023-11-12',
            ],
            [
                'review_id' => 2,
                'review_score' => 4,
                'review' => 'I loved the character Emma since the very beginning and I could not avoid smiling every time the characters were experiencing love misunderstandings. 
In general I enjoyed the reading, I\'ll miss this book. I just gave it 4 rounded stars because it was a little bit slow to follow; 
however I liked the story and I loved the way it made me experience the way people used to live and think in the past.
Additionally the characters in general are really good developed.
',
                'review_date' => '2023-11-12',
            ],
            [
                'review_id' => 3,
                'review_score' => 1,
                'review' => 'Save yourself while you can. We had to read this for school AND i was expecting something to happen IN the book, 
but i finished the book AND still don\'t know what the point is.
',
                'review_date' => '2023-11-12',
            ],
            [
                'review_id' => 4,
                'review_score' => 1,
                'review' => 'This book has literally no plot or explanations or anything, it explains nothing about the setting or anything around it, 
and whatever warped religious view it is based off is never explained or stated. The first 20 chapters spend more time
developing a wall in Offred\'s room than developing major characters.
I gave up partway through and there is no way I\'m going back.
It\'ll make you fall asleep so I guess that\'s something good.
1/10 don\'t even look at it.
',
                'review_date' => '2023-11-12',
            ],
            [
                'review_id' => 5,
                'review_score' => 4,
                'review' => 'This book will make you angry and it should. A fantastic imagination on how it could be if we don\'t 
constantly raise our voice against what is wrong. The author leaves us hanging, so that was a bummer for me.. 
I am a sucker for happy endings..',
                'review_date' => '2023-11-12',
            ],
        ];

        $table = $this->table('reviews');
        $table->insert($data)->save();
    }
}
