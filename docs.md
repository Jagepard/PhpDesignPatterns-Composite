## Table of contents

- [\Structural\Composite\Composite](#class-structuralcompositecomposite)
- [\Structural\Composite\AbstractComponent (abstract)](#class-structuralcompositeabstractcomponent-abstract)
- [\Structural\Composite\Leaf](#class-structuralcompositeleaf)

<hr />

### Class: \Structural\Composite\Composite

> Class Composite

| Visibility | Function |
|:-----------|:---------|
| public | <strong>add(</strong><em>[\Structural\Composite\AbstractComponent](#class-structuralcompositeabstractcomponent-abstract)</em> <strong>$component</strong>)</strong> : <em>void</em> |
| public | <strong>getChild(</strong><em>\string</em> <strong>$key</strong>)</strong> : <em>[\Structural\Composite\AbstractComponent](#class-structuralcompositeabstractcomponent-abstract)</em> |
| public | <strong>remove(</strong><em>\string</em> <strong>$componentName</strong>)</strong> : <em>void</em> |

*This class extends [\Structural\Composite\AbstractComponent](#class-structuralcompositeabstractcomponent-abstract)*

<hr />

### Class: \Structural\Composite\AbstractComponent (abstract)

> Class Component

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed/\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>Component constructor.</em> |
| public | <strong>getName()</strong> : <em>string</em> |

<hr />

### Class: \Structural\Composite\Leaf

> Class Leaf

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Structural\Composite\AbstractComponent](#class-structuralcompositeabstractcomponent-abstract)*

