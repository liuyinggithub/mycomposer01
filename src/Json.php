<?php
<?php
/**
 * Copyright 2016 liuying <815934437@qq.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace mycomposer01;
class Json
{
    public static function encode($data)
    {
		return json_encode($data);
    }
    public static function decode($jsonData)
    {
        return json_decode($jsonData, true);
    }
}

?>
