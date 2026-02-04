# Altius Lifts Color Palette Guide

## Overview
This guide helps you choose the right colors for different design scenarios using the expanded Altius Lifts color system.

---

## Core Brand Colors

### Primary Colors
- **Corporate Blue**: `var(--primary-color)` - #06559F - Main brand color
- **Corporate Cyan**: `var(--accent-color)` - #16DBE1 - Accent/highlight color

---

## Extended Color Scales

### Blue Scale (Cool, Professional, Trustworthy)
```css
--blue-50   /* Lightest - backgrounds, subtle tints */
--blue-100  /* Very light - hover states, cards */
--blue-200  /* Light - borders, dividers */
--blue-300  /* Medium light - secondary elements */
--blue-400  /* Medium - interactive elements */
--blue-500  /* PRIMARY CORPORATE BLUE */
--blue-600  /* Darker - hover states on primary */
--blue-700  /* Dark - text on light backgrounds */
--blue-800  /* Very dark - headings, emphasis */
--blue-900  /* Darkest - maximum contrast */
```

### Cyan Scale (Fresh, Modern, Energetic)
```css
--cyan-50   /* Lightest - backgrounds, subtle accents */
--cyan-100  /* Very light - hover states */
--cyan-200  /* Light - borders, highlights */
--cyan-300  /* Medium light - secondary accents */
--cyan-400  /* PRIMARY CORPORATE CYAN */
--cyan-500  /* Darker - hover states */
--cyan-600  /* Medium dark - active states */
--cyan-700  /* Dark - text on light backgrounds */
--cyan-800  /* Very dark - emphasis */
--cyan-900  /* Darkest - maximum contrast */
```

### Orange Scale (Warm, Energetic, Action-Oriented) **NEW**
```css
--orange-50   /* Lightest - warm backgrounds */
--orange-100  /* Very light - warm hover states */
--orange-200  /* Light - warm borders */
--orange-300  /* Medium light - warm accents */
--orange-400  /* Medium - warm CTAs */
--orange-500  /* Primary orange - main warm accent */
--orange-600  /* Darker - warm hover states */
--orange-700  /* Dark - warm emphasis */
--orange-800  /* Very dark - warm text */
--orange-900  /* Darkest - maximum warm contrast */
```

### Amber Scale (Warm, Inviting, Optimistic) **NEW**
```css
--amber-50   /* Lightest - golden backgrounds */
--amber-100  /* Very light - golden highlights */
--amber-200  /* Light - golden borders */
--amber-300  /* Medium light - golden accents */
--amber-400  /* Medium - golden CTAs */
--amber-500  /* Primary amber - main golden accent */
--amber-600  /* Darker - golden hover states */
--amber-700  /* Dark - golden emphasis */
--amber-800  /* Very dark - golden text */
--amber-900  /* Darkest - maximum golden contrast */
```

### Neutral Scale (Versatile, Clean, Professional)
```css
--neutral-50   /* Near white - subtle backgrounds */
--neutral-100  /* Very light grey - cards, panels */
--neutral-200  /* Light grey - borders, dividers */
--neutral-300  /* Medium light grey - disabled states */
--neutral-400  /* Medium grey - placeholders */
--neutral-500  /* Grey - secondary text */
--neutral-600  /* Medium dark grey - body text */
--neutral-700  /* Dark grey - headings */
--neutral-800  /* Very dark grey - emphasis */
--neutral-900  /* Near black - maximum contrast */
```

---

## Semantic Surface Colors **NEW**

### Panel & Section Backgrounds
```css
--surface-primary          /* White - default */
--surface-secondary        /* Very light grey */
--surface-tertiary         /* Light grey */
--surface-blue-subtle      /* Very subtle blue tint */
--surface-blue-light       /* Light blue background */
--surface-cyan-subtle      /* Very subtle cyan tint */
--surface-cyan-light       /* Light cyan background */
--surface-orange-subtle    /* Very subtle orange tint */
--surface-orange-light     /* Light orange background */
--surface-amber-subtle     /* Very subtle amber tint */
--surface-amber-light      /* Light amber background */
```

### Card Surfaces
```css
--card-surface-default     /* White card */
--card-surface-elevated    /* White with shadow */
--card-surface-blue        /* Blue tinted card */
--card-surface-cyan        /* Cyan tinted card */
--card-surface-neutral     /* Neutral grey card */
--card-surface-orange      /* Orange tinted card */
--card-surface-amber       /* Amber tinted card */
```

### Interactive States
```css
--surface-hover-blue       /* Hover - blue */
--surface-hover-cyan       /* Hover - cyan */
--surface-hover-orange     /* Hover - orange */
--surface-hover-neutral    /* Hover - neutral */
--surface-active-blue      /* Active/selected - blue */
--surface-active-cyan      /* Active/selected - cyan */
--surface-active-orange    /* Active/selected - orange */
```

### Overlays & Backdrops
```css
--overlay-light            /* 10% dark overlay */
--overlay-medium           /* 30% dark overlay */
--overlay-dark             /* 60% dark overlay */
--overlay-blue             /* Blue tinted overlay */
--overlay-cyan             /* Cyan tinted overlay */
```

---

## Gradient Definitions **NEW**

### Brand Gradients
```css
--gradient-blue-primary    /* Blue 500 → Blue 700 */
--gradient-blue-light      /* Blue 300 → Blue 500 */
--gradient-cyan-primary    /* Cyan 400 → Cyan 600 */
--gradient-cyan-light      /* Cyan 200 → Cyan 400 */
```

### Warm Gradients

### Overlay Gradients
```css
--gradient-overlay-dark    /* Dark gradient overlay for images */
--gradient-overlay-blue    /* Blue gradient overlay for images */
--gradient-overlay-cyan    /* Cyan gradient overlay for images */
```

---

## Usage Examples

### Service Panels - Alternating Colored Backgrounds
```css
.service-panel:nth-child(odd) {
  background: var(--surface-blue-subtle);
}

.service-panel:nth-child(even) {
  background: var(--surface-orange-subtle);
}
```

### Cards with Warm Accent
```css
.card-special {
  background: var(--card-surface-amber);
  border-left: 4px solid var(--amber-500);
}

.card-special:hover {
  background: var(--surface-hover-orange);
}
```

### Call-to-Action Button with Warm Color
```css
.btn-warm {
  background: var(--gradient-orange-primary);
  color: white;
}

.btn-warm:hover {
  background: var(--orange-600);
}
```

### Gradient Hero Section
```css
.hero-gradient {
  background: var(--gradient-blue-cyan);
}

.hero-overlay {
  background: var(--gradient-overlay-blue);
}
```

### List Items with Different Accent Colors
```css
.list-item-blue {
  background: var(--surface-blue-subtle);
  border-left: 3px solid var(--blue-400);
}

.list-item-orange {
  background: var(--surface-orange-subtle);
  border-left: 3px solid var(--orange-400);
}

.list-item-cyan {
  background: var(--surface-cyan-subtle);
  border-left: 3px solid var(--cyan-400);
}
```

### Panel with Gradient Background
```css
.feature-panel {
  background: var(--gradient-surface-orange);
  padding: var(--space-12);
}
```

---

## Design Recommendations

### When to Use Cool Colors (Blue/Cyan)
- **Professional services** (installations, maintenance)
- **Trust and reliability** messaging
- **Technical information** sections
- **Primary CTAs** and navigation
- **Corporate communications**

### When to Use Warm Colors (Orange/Amber)
- **Urgent services** (breakdowns, emergency repairs)
- **Special offers** and promotions
- **Call-to-action** buttons for conversions
- **Highlighting important** information
- **Creating energy** and excitement
- **Differentiating** from competitors

### When to Use Neutrals
- **Body text** and paragraphs
- **Backgrounds** for content-heavy sections
- **Borders** and dividers
- **Subtle UI elements**
- **Professional, clean** layouts

### Color Combinations That Work Well
1. **Blue + Cyan** (brand harmony)
2. **Blue + Orange** (complementary contrast)
3. **Cyan + Orange** (vibrant, modern)
4. **Blue + Neutral** (professional, clean)
5. **Orange + Neutral** (warm, approachable)

---

## Quick Reference: Common Use Cases

| Use Case | Recommended Token |
|----------|------------------|
| Default panel background | `--surface-primary` or `--surface-secondary` |
| Alternating panel (cool) | `--surface-blue-subtle` |
| Alternating panel (warm) | `--surface-orange-subtle` |
| List item background | `--surface-cyan-subtle` or `--surface-amber-subtle` |
| Card hover state | `--surface-hover-blue` or `--surface-hover-orange` |
| Active/selected state | `--surface-active-cyan` or `--surface-active-orange` |
| Hero overlay | `--gradient-overlay-blue` or `--gradient-overlay-dark` |
| CTA button | `--gradient-blue-primary` or `--gradient-orange-primary` |
| Accent border | `--border-cyan` or `--border-orange` |
| Subtle highlight | `--highlight-surface-cyan` or `--highlight-surface-amber` |

---

## Migration Tips

### Updating Existing Components
1. Replace hard-coded colors with semantic tokens
2. Use surface tokens for backgrounds instead of mixing colors inline
3. Use gradient tokens instead of defining gradients in components
4. Test color combinations for accessibility (contrast ratios)

### Example Migration
**Before:**
```css
background: color-mix(in srgb, var(--accent-color) 8%, white);
```

**After:**
```css
background: var(--surface-cyan-subtle);
```

---

**Last Updated:** 2026-02-04
**Version:** 2.0 - Expanded Palette with Warm Accents

```css
--gradient-orange-primary  /* Orange 500 → Orange 700 */
--gradient-orange-light    /* Orange 300 → Orange 500 */
--gradient-amber-primary   /* Amber 500 → Amber 700 */
--gradient-amber-light     /* Amber 300 → Amber 500 */
```

### Combination Gradients
```css
--gradient-blue-cyan       /* Blue → Cyan */
--gradient-cyan-blue       /* Cyan → Blue */
--gradient-blue-orange     /* Blue → Orange (complementary) */
--gradient-cyan-orange     /* Cyan → Orange (vibrant) */
```

### Surface Gradients
```css
--gradient-surface-blue    /* Subtle blue fade to white */
--gradient-surface-cyan    /* Subtle cyan fade to white */
--gradient-surface-orange  /* Subtle orange fade to white */
--gradient-surface-neutral /* Subtle grey fade to white */
```

