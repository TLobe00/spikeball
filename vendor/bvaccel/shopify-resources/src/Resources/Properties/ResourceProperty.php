<?php


namespace BVAccel\ShopifyResources\Resources\Properties;

/**
 * Class ResourceProperty
 *
 * @package BVAccel\ShopifyResources\Resources\Properties
 */
abstract class ResourceProperty
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $accepts;

    /**
     * @var
     */
    protected $is_nullable = true;

    /**
     * @var bool
     */
    protected $is_read_only = false;

    /**
     * @var bool
     */
    private $has_changed = false;

    /**
     * @var
     */
    private $value;


    /**
     * ResourceProperty constructor.
     *
     * @param string $name
     * @param array  $accepts
     * @param bool   $is_read_only
     */
    public function __construct(string $name, array $accepts, $is_read_only = false)
    {
        $this->name         = $name;
        $this->accepts      = $accepts;
        $this->is_read_only = $is_read_only;
    }

    /**
     * Accepts Value
     *
     * @param $value
     * @return bool
     */
    abstract public function acceptsValue($value): bool;

    abstract public function valueIsDifferent($value): bool;

    public function readOnly()
    {
        $this->is_read_only = true;

        return $this;
    }

    /**
     * Name
     *
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }


    /**
     * Get Value
     *
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * Set Value
     *
     * @param      $value
     * @param bool $is_in_override_mode
     * @throws \Exception
     */
    public function setValue($value, bool $is_in_override_mode)
    {
        if (!$is_in_override_mode and $this->is_read_only) {
            throw  new \Exception("$this->name is a readonly value.");
        }

        if (!($is_in_override_mode or $this->acceptsValue($value) or $this->is_read_only)) {
            throw new \Exception("Invalid Value for $this->name. " . "Accepts: " . implode(',', $this->accepts) . ", Provided: " . gettype($value));
        } elseif ($this->valueIsDifferent($value)) {
            $this->has_changed = true;
        };

        $this->value = $value;
    }

    /**
     * Get Changes
     *
     * @return mixed
     */
    abstract public function getChanges();

    /**
     * Has Changed
     *
     * @return bool
     */
    public function hasChanged(): bool
    {
        return $this->has_changed;
    }

    /**
     * Reset
     */
    public function reset()
    {
        $this->has_changed = false;
    }
}