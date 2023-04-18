## Table of contents
- [Structural\Composite\AbstractComponent](#structural_composite_abstractcomponent)
- [Structural\Composite\Composite](#structural_composite_composite)
- [Structural\Composite\CompositeInterface](#structural_composite_compositeinterface)
- [Structural\Composite\Leaf](#structural_composite_leaf)
<hr>

<a id="structural_composite_abstractcomponent"></a>

### Class: Structural\Composite\AbstractComponent
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает имя|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает имя|


<a id="structural_composite_composite"></a>

### Class: Structural\Composite\Composite
##### extends [Structural\Composite\AbstractComponent](#structural_composite_abstractcomponent)
##### implements [Structural\Composite\CompositeInterface](#structural_composite_compositeinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>add</strong>( Structural\Composite\AbstractComponent $component ): void</em><br>Adds a component<br>Добавляет компонент|
|public|<em><strong>remove</strong>( string $key ): void</em><br>Removes a component<br>Удаляет компонент|
|public|<em><strong>getChild</strong>( string $key )</em><br>Gets a child<br>Получает потомка|
|public|<em><strong>printTree</strong>( ?Structural\Composite\AbstractComponent $child   $tab ): void</em><br>Displays the tree of descendants<br>Отображает дерево потомков|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает имя|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает имя|


<a id="structural_composite_compositeinterface"></a>

### Class: Structural\Composite\CompositeInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>add</strong>( Structural\Composite\AbstractComponent $component ): void</em><br>|
|abstract public|<em><strong>remove</strong>( string $key ): void</em><br>|
|abstract public|<em><strong>getChild</strong>( string $key )</em><br>|


<a id="structural_composite_leaf"></a>

### Class: Structural\Composite\Leaf
##### extends [Structural\Composite\AbstractComponent](#structural_composite_abstractcomponent)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает имя|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает имя|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
