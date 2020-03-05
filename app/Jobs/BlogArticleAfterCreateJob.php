<?php

namespace App\Jobs;

use App\Models\BlogArticle;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class BlogArticleAfterCreateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var BlogArticle
     */
    private  $blogArticle;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(BlogArticle $blogArticle)
    {
        $this->blogArticle = $blogArticle;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        logs()->info("Создана новая запись в блоке статей [{$this->blogArticle->id}]");
    }
}
