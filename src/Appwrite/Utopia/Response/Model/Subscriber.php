<?php

namespace Appwrite\Utopia\Response\Model;

use Appwrite\Utopia\Response;
use Appwrite\Utopia\Response\Model;

class Subscriber extends Model
{
    public function __construct()
    {
        $this
            ->addRule('$id', [
                'type' => self::TYPE_STRING,
                'description' => 'Subscriber ID.',
                'default' => '',
                'example' => '259125845563242502',
            ])
            ->addRule('$createdAt', [
                'type' => self::TYPE_DATETIME,
                'description' => 'Subscriber creation time in ISO 8601 format.',
                'default' => '',
                'example' => self::TYPE_DATETIME_EXAMPLE,
            ])
            ->addRule('$updatedAt', [
                'type' => self::TYPE_DATETIME,
                'description' => 'Subscriber update date in ISO 8601 format.',
                'default' => '',
                'example' => self::TYPE_DATETIME_EXAMPLE,
            ])
            ->addRule('targetId', [
                'type' => self::TYPE_STRING,
                'description' => 'Target ID.',
                'default' => '',
                'example' => '259125845563242502',
            ])
            ->addRule('userId', [
                'type' => self::TYPE_STRING,
                'description' => 'User ID.',
                'default' => '',
                'example' => '5e5ea5c16897e',
            ])
            ->addRule('userName', [
                'type' => self::TYPE_STRING,
                'description' => 'User Name.',
                'default' => '',
                'example' => 'Aegon Targaryen',
            ])
            ->addRule('topicId', [
                'type' => self::TYPE_STRING,
                'description' => 'Topic ID.',
                'default' => '',
                'example' => '259125845563242502',
            ]);
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Subscriber';
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType(): string
    {
        return Response::MODEL_SUBSCRIBER;
    }
}
