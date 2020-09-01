<?php

require_once './parent.php';

/**
 * ConcreteClassに相当する
 */

class ListDisplay extends AbstractDisplay
{
    /**
     * ヘッダを表示する
     */
    protected function displayHeader()
    {
        echo '<dl>';
    }

    /**
     * ボディを表示する
     */
    protected function displayBody()
    {
        foreach($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    /**
     * フッタを表示する
     */
    protected function displayFooter()
    {
        echo '</dl>';
    }
}

class TableDisplay extends AbstractDisplay
{
    /**
     * ヘッダを表示
     */
    protected function displayHeader()
    {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    /**
     * ボディを表示
     */
    protected function displayBody()
    {
        foreach($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }

    /**
     * フッタを表示
     */
    protected function displayFooter()
    {
        echo '</table>';
    }
}