<?php

declare(strict_types=1);
interface VideoInterface
{
    /**
     * @return HTML <iframe> tag for displaying the video
     */
    public function getHTML(): string;

    /**
     * @return source uniqe identifier of the video
     */
    public function getSource(): string;

    /**
     * @return name title of the video
     */
    public function getName(): string;
}
