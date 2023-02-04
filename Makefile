test:
	@(for i in $$(find task*/* -type f -name Makefile); do make test -C $$(dirname $$i) || exit 1; done)
