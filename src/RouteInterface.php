<?php

interface RouteInterface
{

	public function getAnonymousFunction(): \Closure;

	public function getRegularExpression(): string;

	public function setAnonymousFunction(\Closure $anonymous_function): void;

	public function setRegularExpression(string $regular_expression): void;

}
