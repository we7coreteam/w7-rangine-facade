<?php

/**
 * This file is part of Rangine
 *
 * (c) We7Team 2019 <https://www.rangine.com/>
 *
 * document http://s.w7.cc/index.php?c=wiki&do=view&id=317&list=2284
 *
 * visited https://www.rangine.com/ for more details
 */

namespace W7\Facade;

use W7\Core\Database\ConnectionResolver;

/**
 * Class DB
 * @package W7\Facade
 *
 * @see \W7\Core\Database\ConnectionResolver
 * @see \Illuminate\Database\Connection
 */
class DB extends FacadeAbstract {
	protected static function getFacadeAccessor() {
		return 'db-factory';
	}

	public static function getFacadeRoot() : ConnectionResolver {
		return parent::getFacadeRoot();
	}

	public static function connection(string $name = null) {
		return static::getFacadeRoot()->connection($name);
	}

	public static function getDefaultConnection() {
		return static::getFacadeRoot()->getDefaultConnection();
	}

	public static function setDefaultConnection(string $name) {
		static::getFacadeRoot()->setDefaultConnection($name);
	}

	public static function table(string $table, string $as = null) {
		return static::getFacadeRoot()->table($table, $as);
	}

	public static function raw($value) {
		return static::getFacadeRoot()->raw($value);
	}

	public static function selectOne(string $query, array $bindings = [], bool $useReadPdo = true) {
		return static::getFacadeRoot()->selectOne($query, $bindings, $useReadPdo);
	}

	public static function select(string $query, array $bindings = [], bool $useReadPdo = true) {
		return static::getFacadeRoot()->select($query, $bindings, $useReadPdo);
	}

	public static function insert(string $query, array $bindings = []) {
		return static::getFacadeRoot()->insert($query, $bindings);
	}

	public static function update(string $query, array $bindings = []) {
		return static::getFacadeRoot()->update($query, $bindings);
	}

	public static function delete(string $query, array $bindings = []) {
		return static::getFacadeRoot()->delete($query, $bindings);
	}

	public static function statement(string $query, array $bindings = []) {
		return static::getFacadeRoot()->statement($query, $bindings);
	}

	public static function affectingStatement(string $query, array $bindings = []) {
		return static::getFacadeRoot()->affectingStatement($query, $bindings);
	}

	public static function unprepared(string $query) {
		return static::getFacadeRoot()->unprepared($query);
	}

	public static function prepareBindings(array $bindings) {
		return static::getFacadeRoot()->prepareBindings($bindings);
	}

	public static function transaction(\Closure $callback, int $attempts = 1) {
		return static::getFacadeRoot()->transaction($callback, $attempts);
	}

	public static function beginTransaction() {
		return static::getFacadeRoot()->beginTransaction();
	}

	public static function commit() {
		static::getFacadeRoot()->commit();
	}

	public static function rollBack($toLevel = null) {
		static::getFacadeRoot()->rollBack($toLevel);
	}

	public static function transactionLevel() {
		return static::getFacadeRoot()->transactionLevel();
	}

	public static function pretend(\Closure $callback) {
		return static::getFacadeRoot()->pretend($callback);
	}

	public static function listen(\Closure $callback) {
		static::getFacadeRoot()->listen($callback);
	}
}
