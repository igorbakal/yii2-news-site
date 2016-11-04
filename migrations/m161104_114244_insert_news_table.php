<?php

use jamband\schemadump\Migration;

class m161104_114244_insert_news_table extends Migration
{
    public function up()
    {
        $this->insert('news', [
            'id' => '1',
            'user_id' => '3',
            'title' => 'Lorem Ipsum',
            'short' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare, risus non faucibus commodo, lacus odio commodo elit, at aliquam risus tellus eget nunc. Cras aliquet gravida hendrerit. Vivamus quis tellus id nulla finibus consectetur. Donec vel nulla eu dolor tempor efficitur eget nec neque. Praesent vitae justo sodales, tincidunt sapien ac, congue risus. Vestibulum accumsan sapien in elit suscipit, id molestie quam iaculis. Duis tortor lacus, scelerisque sit amet viverra pharetra, ',
            'content' => '

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare, risus non faucibus commodo, lacus odio commodo elit, at aliquam risus tellus eget nunc. Cras aliquet gravida hendrerit. Vivamus quis tellus id nulla finibus consectetur. Donec vel nulla eu dolor tempor efficitur eget nec neque. Praesent vitae justo sodales, tincidunt sapien ac, congue risus. Vestibulum accumsan sapien in elit suscipit, id molestie quam iaculis. Duis tortor lacus, scelerisque sit amet viverra pharetra, sodales vitae sem. Donec tincidunt, mauris quis ultrices facilisis, tellus lectus dictum ligula, vel fermentum augue nibh eu orci. Fusce convallis sapien in dapibus hendrerit. Fusce sed arcu ipsum. Duis ut libero eu erat sodales scelerisque. Maecenas id placerat mauris. Quisque augue dui, tempor sit amet justo eget, vestibulum placerat massa. Curabitur sit amet consectetur massa. Quisque et diam auctor, venenatis ex vel, volutpat elit. Cras tincidunt rhoncus porta.

Mauris sagittis euismod velit, at convallis justo consequat a. Morbi a molestie diam. Aenean eget lacus ac nulla porttitor lacinia. Sed mollis, erat ut tincidunt interdum, justo ex suscipit nibh, ut maximus quam dui vehicula velit. Phasellus ac erat convallis nulla auctor feugiat. Donec eu pulvinar sapien. Integer a nisl id leo sagittis malesuada ut quis risus. Sed accumsan ut libero ut porta. Suspendisse in aliquam nulla, quis consequat purus. Praesent posuere velit at velit bibendum sodales. Praesent ornare nec orci quis imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque enim mi, hendrerit semper bibendum mollis, convallis sed tellus. Curabitur odio elit, fringilla ac lacinia at, fermentum eget quam.

Quisque et velit erat. Quisque ac cursus nulla, vel imperdiet dui. Donec bibendum turpis quam, non ultrices nisi porttitor at. Mauris gravida ante vitae gravida fringilla. Vivamus ultricies fringilla luctus. Ut ultricies ultricies arcu. Cras dictum in purus viverra condimentum. Donec massa nunc, ultricies quis sagittis eu, maximus et mi. Suspendisse tincidunt elit eros, vel posuere sem interdum sed.

Vestibulum commodo odio malesuada pretium ornare. Proin posuere sit amet felis sit amet varius. Praesent dictum ante sit amet diam varius iaculis. Fusce rhoncus ligula nulla, a vestibulum dolor bibendum vitae. Ut aliquam nunc id ligula mollis gravida. Sed rhoncus arcu ac mauris suscipit, sit amet posuere arcu luctus. Phasellus eget tellus est. Nunc pellentesque urna vel ullamcorper placerat. Morbi nec nisl elementum tortor dapibus fringilla et a velit. Proin ac nibh eu dui euismod egestas. Aenean congue, magna quis lacinia vehicula, erat tellus pulvinar nulla, iaculis malesuada orci dui eget tellus. Phasellus dictum faucibus ipsum, at suscipit erat. Curabitur id felis id sem blandit laoreet. Cras sed facilisis diam. Suspendisse viverra eu nibh non faucibus.

Nullam facilisis euismod tristique. Maecenas in blandit leo. Suspendisse hendrerit nunc eget lobortis venenatis. Nullam vitae vulputate nunc. Duis ut turpis facilisis, viverra massa ut, pretium lorem. Quisque vel luctus est. Nam enim odio, rhoncus ac risus quis, interdum gravida quam. ',
        ]);
        $this->insert('news', [
            'id' => '2',
            'user_id' => '3',
            'title' => 'Lorem Ipsum 2',
            'short' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel purus eget metus pulvinar tincidunt a in erat. Cras accumsan diam quis libero rutrum, vel hendrerit nulla aliquet. Pellentesque ac nisl at metus commodo gravida et a turpis. In hac habitasse platea dictumst. Quisque malesuada volutpat enim non egestas. Pellentesque aliquam sem nec purus rutrum ultricies. In tempus mauris eu vehicula tristique. Cras a sollicitudin lacus. Curabitur tempus ipsum quis lacus sodales, vel vestib',
            'content' => '

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare, risus non faucibus commodo, lacus odio commodo elit, at aliquam risus tellus eget nunc. Cras aliquet gravida hendrerit. Vivamus quis tellus id nulla finibus consectetur. Donec vel nulla eu dolor tempor efficitur eget nec neque. Praesent vitae justo sodales, tincidunt sapien ac, congue risus. Vestibulum accumsan sapien in elit suscipit, id molestie quam iaculis. Duis tortor lacus, scelerisque sit amet viverra pharetra, sodales vitae sem. Donec tincidunt, mauris quis ultrices facilisis, tellus lectus dictum ligula, vel fermentum augue nibh eu orci. Fusce convallis sapien in dapibus hendrerit. Fusce sed arcu ipsum. Duis ut libero eu erat sodales scelerisque. Maecenas id placerat mauris. Quisque augue dui, tempor sit amet justo eget, vestibulum placerat massa. Curabitur sit amet consectetur massa. Quisque et diam auctor, venenatis ex vel, volutpat elit. Cras tincidunt rhoncus porta.

Mauris sagittis euismod velit, at convallis justo consequat a. Morbi a molestie diam. Aenean eget lacus ac nulla porttitor lacinia. Sed mollis, erat ut tincidunt interdum, justo ex suscipit nibh, ut maximus quam dui vehicula velit. Phasellus ac erat convallis nulla auctor feugiat. Donec eu pulvinar sapien. Integer a nisl id leo sagittis malesuada ut quis risus. Sed accumsan ut libero ut porta. Suspendisse in aliquam nulla, quis consequat purus. Praesent posuere velit at velit bibendum sodales. Praesent ornare nec orci quis imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque enim mi, hendrerit semper bibendum mollis, convallis sed tellus. Curabitur odio elit, fringilla ac lacinia at, fermentum eget quam.

Quisque et velit erat. Quisque ac cursus nulla, vel imperdiet dui. Donec bibendum turpis quam, non ultrices nisi porttitor at. Mauris gravida ante vitae gravida fringilla. Vivamus ultricies fringilla luctus. Ut ultricies ultricies arcu. Cras dictum in purus viverra condimentum. Donec massa nunc, ultricies quis sagittis eu, maximus et mi. Suspendisse tincidunt elit eros, vel posuere sem interdum sed.

Vestibulum commodo odio malesuada pretium ornare. Proin posuere sit amet felis sit amet varius. Praesent dictum ante sit amet diam varius iaculis. Fusce rhoncus ligula nulla, a vestibulum dolor bibendum vitae. Ut aliquam nunc id ligula mollis gravida. Sed rhoncus arcu ac mauris suscipit, sit amet posuere arcu luctus. Phasellus eget tellus est. Nunc pellentesque urna vel ullamcorper placerat. Morbi nec nisl elementum tortor dapibus fringilla et a velit. Proin ac nibh eu dui euismod egestas. Aenean congue, magna quis lacinia vehicula, erat tellus pulvinar nulla, iaculis malesuada orci dui eget tellus. Phasellus dictum faucibus ipsum, at suscipit erat. Curabitur id felis id sem blandit laoreet. Cras sed facilisis diam. Suspendisse viverra eu nibh non faucibus.

Nullam facilisis euismod tristique. Maecenas in blandit leo. Suspendisse hendrerit nunc eget lobortis venenatis. Nullam vitae vulputate nunc. Duis ut turpis facilisis, viverra massa ut, pretium lorem. Quisque vel luctus est. Nam enim odio, rhoncus ac risus quis, interdum gravida quam. ',
        ]);
        $this->insert('news', [
            'id' => '3',
            'user_id' => '3',
            'title' => 'проверка',
            'short' => 'Проверка уведомлений',
            'content' => 'testastastas',
        ]);
    }

    public function down()
    {
        $this->delete('news', 'title = "Lorem Ipsum"');
        $this->delete('news', 'title = "Lorem Ipsum 2"');
        $this->delete('news', 'title = "проверка"');
    }
}
