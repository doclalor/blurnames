<?php
class block_blurnames extends block_base {
    public function init() {
        $this->title = get_string('blurnames', 'block_blurnames');
    }

public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass;
    $this->content->text   = '<style>th.user a, h2 a, .useremail, .author a, .fullname a { color: rgba(0, 0, 0, 0) !important; text-shadow: 0 0 24px rgba(0,0,0,0.6); } .userpicture, .user img, #graded_users_selector { -webkit-filter: blur(6px); -moz-filter: blur(6px); -o-filter: blur(6px); -ms-filter: blur(6px); filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=\'6\'); } </style><p style="border: solid thin grey; border-radius: 1em; padding: 10px;">The presence of this block on gradebook pages will blur the names, email addresses, and images of students in both the Grader and User Reports; it will do the same for names in Moodle core\'s Forum, and in the Choice module. The protection of student privacy allows for more FERPA-friendly sharing among faculty. <b>Caveat:</b> It will not blur names in tooltips, which appear when <i>hovering</i> over gradebook cells.</p>';

    return $this->content;
  }
} 

