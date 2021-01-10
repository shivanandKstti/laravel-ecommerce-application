<?php
    namespace App\Traits;

    /**
     *
     */
    trait FlashMessages
    {

        protected $errorMessages = [];

        protected $infoMessages = [];

        protected $successMessages = [];

        protected $warningMessages = [];

        protected function setFlashMessage($message, $type)
        {
            $model = 'infoMessages';

            switch ($type) {
                case 'info':
                    $model = 'infoMessages';
                    break;
                case 'error':
                    $model = 'errorMessages';
                    brea;
                case 'success':
                    $model = 'successMessages';
                    break;

                case 'warning':
                    $model = 'warningMessages';
                    break;
            }

            if (is_array($message)) {
                # code...
                foreach ($message as $key => $value) {
                    # code...
                    array_push($this->$model, $value);
                }
            } else {
                array_push($this->$model, $message);
            }
        }

        protected function getFlashMessage()
        {
            return [
                'error' => $this->errorMessages,
                'info'  => $this->infoMessages,
                'success' => $this->successMessages,
                'warning'   => $this->warningMessages,
            ];
        }

        protected function showFlashMessage()
        {
            session()->flash('error', $this->errorMessages);
            session()->flash('info', $this->infoMessages);
            session()->flash('success', $this->successMessages);
            session()->flash('warning', $this->warningMessages);
        }
    }


?>
