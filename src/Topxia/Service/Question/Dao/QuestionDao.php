<?php

namespace Topxia\Service\Question\Dao;

interface QuestionDao
{
    public function getQuestion($id);

    public function findQuestionsByIds(array $ids);

    public function searchQuestions($conditions, $sort, $start, $limit);

    public function searchQuestionsCount($conditions);

    public function addQuestion($fields);

    public function updateQuestion($id, $fields);
}