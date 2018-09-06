<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateResponse
{

//    Can be omit.
//    protected $Add = null;

//    Can be omit.
//    protected $Update = null;

//    Can be omit.
//    protected $Delete = null;

//    Can be omit.
//    protected $Failure = null;

    /**
     * Creates a new instance of DeduplicateResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Add.
     *
     * @return DeduplicateResponseAddItem[]|null
     */
    public function getAdd()
    {
        return isset($this->Add) ? $this->Add : null;
    }

    /**
     * Sets Add.
     *
     * @param DeduplicateResponseAddItem[]|null $value
     * @return $this
     */
    public function setAdd(array $value = null)
    {
        $this->Add = $value;

        return $this;
    }

    /**
     * Gets Update.
     *
     * @return DeduplicateResponseUpdateItem[]|null
     */
    public function getUpdate()
    {
        return isset($this->Update) ? $this->Update : null;
    }

    /**
     * Sets Update.
     *
     * @param DeduplicateResponseUpdateItem[]|null $value
     * @return $this
     */
    public function setUpdate(array $value = null)
    {
        $this->Update = $value;

        return $this;
    }

    /**
     * Gets Delete.
     *
     * @return IdsCriteria|null
     */
    public function getDelete()
    {
        return isset($this->Delete) ? $this->Delete : null;
    }

    /**
     * Sets Delete.
     *
     * @param IdsCriteria|null $value
     * @return $this
     */
    public function setDelete(IdsCriteria $value = null)
    {
        $this->Delete = $value;

        return $this;
    }

    /**
     * Gets Failure.
     *
     * @return DeduplicateErrorItem[]|null
     */
    public function getFailure()
    {
        return isset($this->Failure) ? $this->Failure : null;
    }

    /**
     * Sets Failure.
     *
     * @param DeduplicateErrorItem[]|null $value
     * @return $this
     */
    public function setFailure(array $value = null)
    {
        $this->Failure = $value;

        return $this;
    }


}

