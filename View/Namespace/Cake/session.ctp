<?php
switch ($state) {
	case self::TAG_OPEN:
	case self::TAG_SELF:
		echo $this->compile('$out = $this->%s->read(%s); $set = %s; if (!empty($set)) { $this->set($set, $out); } else { echo $out; }', {$ns}->settings['classes']['Session'], $this->resolve($attrs, 'name'), $this->resolve($attrs, 'set'));
}

