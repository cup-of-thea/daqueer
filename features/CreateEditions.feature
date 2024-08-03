Feature: Create Editions
  As an admin
  I want to create editions
  In order to have manage displayed events

  Scenario: An admin can create an edition
    When I create an edition with the following attributes:
      | title     |
      | Edition 1 |
    Then I should have the following editions:
      | title     |
      | Edition 1 |