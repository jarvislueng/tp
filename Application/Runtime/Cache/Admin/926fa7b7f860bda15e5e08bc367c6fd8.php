<?php if (!defined('THINK_PATH')) exit(); if(is_array($data)): foreach($data as $key=>$data): ?><table>
        <tr>
            <td>id:</td>
            <td><?php echo ($data["id"]); ?></td>
        </tr>
        <tr>
            <td>标题：</td>
            <td><?php echo ($data["title"]); ?></td>
        </tr>
        <tr>
            <td>内容：</td>
            <td><?php echo ($data["content"]); ?></td>
        </tr>
    </table><?php endforeach; endif; ?>