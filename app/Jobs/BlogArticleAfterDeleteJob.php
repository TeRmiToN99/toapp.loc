<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class BlogArticleAfterDeleteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** @var int */
    private $blogArticleId;
    /**
     * Create a new job instance.
     *
     * @param int $blogArticleId
     *
     * @return void
     */
    public function __construct($blogArticleId)
    {
        $this->blogArticleId = $blogArticleId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        logs()->warning("Удалена записть из блога статей [{$this->blogArticleId}]");
    }
}
