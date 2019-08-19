# PHP FUNCTION

-----------------------------------------------------
I use this function for my WebApp Backend
create using PHP

### Random_Number()

```
<?php 
echo random_number(1,30);
```

### ArrayList Yii2 Component
Create ..\components\ArrayList.php

***Usage in Model***:
```

namespace common\models;

use Yii;

class User extends \yii\db\ActiveRecord
{

	....
	use \common\components\ArrayList;
}


``` 
***Usage in View***:

```
<?= $form->field($model, 'users')->dropDownList(
        \common\models\User::getArrayList()
 ) ?>
```


