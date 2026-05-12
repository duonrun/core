# Changelog

## [Unreleased](https://github.com/celemas/core/compare/0.2.0...HEAD)

### Breaking Changes

- Rename package metadata, root namespace, repository URLs, homepage, and contact email to Celemas.
- Moved the `Celemas\Core\Factory` interface to `Celemas\Core\Factory\Factory`. PSR-17 factory implementations remain in the `Celemas\Core\Factory` namespace.
- Removed app-level configuration support, including `ConfigInterface`, `AddsConfigInterface`, `App::config()`, and config arguments in `App::__construct()` and `App::create()`.
- Removed the factory argument from `App::create()`. It now discovers a PSR-17 factory automatically; pass custom factories to the `App` constructor.
- Updated route helpers to match `celemas/router`: use `any()` for methodless routes instead of `route()`, use `map()` for explicit method lists, use callable controller arrays, remove the passthrough `routes()` helper, remove the `addGroup()` helper, and make `group()` return `void`.

### Added

- Added `Celemas\Core\Factory\Discovery` to select an installed Nyholm, Guzzle, or Laminas PSR-17 factory automatically.
- `App::group()` now delegates to the router callback group API.
- BrowserSync-backed watch mode to the development server with the `--watch` option, configurable watch patterns, brace/glob expansion, and reload debounce settings.

## [0.2.0](https://github.com/celemas/core/releases/tag/0.2.0) (2026-02-21)

Codename: Jonas

### Changed

- BREAKING: Replaced `celemas/registry` dependency with `celemas/container`. The `Registry` class is now `Container` (`Celemas\Container\Container`), and `App::registry()` is now `App::container()`.

## [0.1.0](https://github.com/celemas/core/releases/tag/0.1.0) (2026-01-31)

Initial release.

### Added

- Core web framework integrating CLI, container, and router components
- HTTP request/response handling with PSR-7/PSR-15 support
- Application bootstrapping and middleware pipeline
