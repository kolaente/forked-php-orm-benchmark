<?php

passthru('php '.dirname(__FILE__).'/TestRunnerDoctrine22TestSuite.php');
passthru('php '.dirname(__FILE__).'/TestRunnerDoctrine22WithCacheTestSuite.php');

// Optional tests of the alternative abstraction levels of results doctrine provides.
// These are often used in production when data is only needed for presentation (read-only) purposes.

passthru('php '.dirname(__FILE__).'/TestRunnerDoctrine22ArrayHydrateTestSuite.php');
passthru('php '.dirname(__FILE__).'/TestRunnerDoctrine22ScalarHydrateTestSuite.php');
passthru('php '.dirname(__FILE__).'/TestRunnerDoctrine22WithoutProxiesTestSuite.php');

