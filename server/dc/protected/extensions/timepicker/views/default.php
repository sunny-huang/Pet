<input type="text" class="timepicker" id="<?php echo $this->id; ?>" readOnly="readOnly" value="<?php echo $this->model->{$this->name}?date('Y-m-d H:i:s',$this->model->{$this->name}):$this->options['value']; ?>" name="<?php echo get_class($this->model).(!empty($this->options['tabularLevel'])?$this->options['tabularLevel']:'').'['.$this->name.']'; ?>" />