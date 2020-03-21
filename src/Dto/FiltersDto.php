<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Dto;

final class FiltersDto
{
    /** @var FilterInterface */
    private $configuredFilters;

    public function __construct(array $configuredFilters)
    {
        $this->configuredFilters = $configuredFilters;
    }

    public function getConfiguredFilters(): array
    {
        return $this->configuredFilters;
    }

    /**
     * @param FilterInterface[] $updatedFilters
     */
    public function updateConfiguredFilters(array $updatedFilters): self
    {
        $this->configuredFilters = $updatedFilters;

        return $this;
    }
}