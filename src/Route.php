<?php

class Route implements RouteInterface
{

	protected $_anonymous_function;

	protected $_regular_expression;

	public function getAnonymousFunction(): \Closure
	{
		return $this->_anonymous_function;
	}

	public function getRegularExpression(): string
	{
		return $this->_regular_expression;
	}

	public function setAnonymousFunction(\Closure $anonymous_function): void
	{
		$this->_anonymous_function = $anonymous_function;
	}

	public function setRegularExpression(string $regular_expression): void
	{
		$this->_regular_expression = $regular_expression;
	}

}
