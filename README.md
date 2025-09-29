# The Chunk List

The Chunk List is a comprehensive open-source database of document parser services, their pricing, and capabilities.

There's no single database with information about all the available document parsing and processing services. We started The Chunk List as a community-contributed project to address this. We also use it internally in [Parxy](https://github.com/oneofftech/parxy).


## Contributing

The data is stored in the repo as TOML files; organized by provider. The logo is stored as an SVG. 

We need your help keeping the data up to date.

### Adding a New Model

To add a new model, start by checking if the provider already exists in the `providers/` directory. If not, then:

#### 1. Create a Provider

If the provider isn't already in `providers/`:

1. Create a new folder in `providers/` with the provider's ID. For example, `providers/newprovider/`.
2. Add a `provider.toml` with the provider details:

  ```toml
  name = "Provider Name"
  description = "A small description."
  currency = "USD"
  url = "https://..." # Link to home page
  github = "https://github.com/..."  # Link to GitHub repo, if available
  docs = "https://..." # Link to provider's documentation
  type = ["Cloud", "Self-hosted"]
  last_updated = "2025-09-16"
  ```


#### 2. Add a Logo (optional)

To add a logo for the provider:

1. Add a `logo.svg` file to the provider's directory (e.g., `providers/newprovider/logo.svg`)
2. Use SVG format with no fixed size or colors - use `currentColor` for fills/strokes

Example SVG structure:

```svg
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
  <!-- Logo paths here -->
</svg>
```


#### 3. Submit a Pull Request

1. Fork this repo
2. Create a new branch with your changes
3. Add your provider files
4. Open a PR with a clear description

### Validation

There's a GitHub Action that will automatically validate your submission against our schema to ensure:

- All required fields are present
- Data types are correct
- Values are within acceptable ranges
- TOML syntax is valid

## Schema Reference

Providers and their plans must conform to the following schema, as defined in `providers/schema.json`.

### Provider Schema:

| Field | Type | Description | Required |
|-------|------|-------------|-----------|
| `url` | String | Provider's website URL | Yes |
| `name` | String | Name of the provider | Yes |
| `description` | String | Detailed description of the service | Yes |
| `type` | String[] | Deployment type (e.g., "Cloud", "Self-hosted"), a list is accepted as a provider can offer both a cloud and self-hosted deployment | Yes |
| `last_updated` | String | Last update date (YYYY-MM-DD) | No |
| `currency` | String | Default currency for pricing (e.g., "USD") | No |
| `github` | String | GitHub repository URL, if open source version is available | No |
| `docs` | String | Documentation URL | No |

### Metadata Section

| Field | Type | Description | Required |
|-------|------|-------------|-----------|
| `default_billing_frequency` | String | Default billing frequency (e.g., "Monthly") | Yes |
| `default_currency` | String | Default currency for pricing | Yes |
| `has_usage_based_billing` | Boolean | Whether provider offers usage-based billing | Yes |
| `has_enterprise_option` | Boolean | Whether provider offers enterprise options | Yes |
| `has_free_tier` | Boolean | Whether provider offers a free tier | Yes |
| `has_trial` | Boolean | Whether provider offers a trial period | No |
| `eu_hosting` | String | EU hosting availability status | No |
| `credits` | String | Description of credit system | No |
| `minimum_credits_per_page` | Number | Minimum credits required per page | No |

### Compliance Section

| Field | Type | Description | Required |
|-------|------|-------------|-----------|
| `gdpr` | Boolean | Declared GDPR compliance status | No |
| `soc_two` | Boolean | Declared SOC 2 compliance status | No |
| `iso` | Boolean | Declared ISO 27001 compliance status | No |
| `hipaa` | Boolean | Declared HIPAA compliance status | No |

### Processing Capabilities

| Field | Type | Description | Required |
|-------|------|-------------|-----------|
| `tables` | Boolean | Can process tables | No |
| `forms` | Boolean | Can process forms | No |
| `images` | Boolean | Can process images | No |
| `graphs` | Boolean | Can process graphs | No |
| `equation` | Boolean | Can process equations | No |
| `ocr` | Boolean | Has OCR capabilities | No |

### Input Formats

| Field | Type | Description | Required |
|-------|------|-------------|-----------|
| `pdf` | Boolean | Supports PDF input | Yes |
| `spreadsheet` | Boolean | Supports spreadsheet input | Yes |
| `word` | Boolean | Supports Word documents | Yes |
| `powerpoint` | Boolean | Supports PowerPoint files | Yes |
| `html` | Boolean | Supports HTML input | Yes |
| `epub` | Boolean | Supports EPUB format | Yes |
| `images` | Boolean | Supports image input | Yes |

### Output Formats

| Field | Type | Description | Required |
|-------|------|-------------|-----------|
| `json` | Boolean | Supports JSON output | Yes |
| `markdown` | Boolean | Supports Markdown output | Yes |
| `html` | Boolean | Supports HTML output | Yes |
| `plain` | Boolean | Supports plain text output | Yes |
| `structuredData` | Boolean | Supports structured data output | Yes |

### Pricing Tiers

| Field | Type | Description | Required |
|-------|------|-------------|-----------|
| `name` | String | Name of the tier | Yes |
| `billing_type` | String | Type of billing (e.g., "Free", "Subscription", "Usage") | Yes |
| `price` | String | Price of the tier | Yes |
| `included_quota` | String | Included usage quota | No |
| `billing_frequency` | String | Billing frequency | Yes |
| `currency` | String | Currency for this tier | Yes |
| `cost_per_unit` | String | Cost for additional usage | No |
| `features` | Array[String] | List of features included in this tier | No |



### Examples

See existing providers in the `providers/` directory for reference:

- `providers/llamacloud/` - LlamaCloud hosted service
- `providers/chunkr/` - Chunkr.ai hosted service
- `providers/unstructured/` - Unstructured.io hosted service


### Questions?

Open a discussion if you need help or have questions about contributing.

---

The project is provided and supported by [OneOff-Tech (UG)](https://oneofftech.de).

<p align="left"><a href="https://oneofftech.de" target="_blank"><img src="https://raw.githubusercontent.com/OneOffTech/.github/main/art/oneofftech-logo.svg" width="200"></a></p>