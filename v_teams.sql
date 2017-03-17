ALTER VIEW v_teams AS

SELECT
  -- basic info
  p.teamNumber                 AS teamNumber,
  p.teamName                   AS teamName,
  m.competition                AS competition,
  m.avg_score                  AS avg_score,
  m.dev_score                  AS dev_score,
  m.avg_rating                 AS avg_rating,
  m.dev_rating                 AS dev_rating,
  p.howToWin                   AS overallStrat,

  -- rope & climb
  p.ropeCapable                AS useClimb,
  m.prop_climeRope             AS prop_climbRope,
  m.avg_headRopeTime           AS avg_headRopeTime,
  m.avg_grabRopeTime           AS avg_grabRopeTime,
  p.attachTime + p.climbTime   AS claim_headRopeTime,
  p.climbTime                  AS claim_grabRopeTime,

  -- gears
  p.gearStrategy               AS useGear,
  m.avg_gearsPassed            AS avg_gearsPassed,
  m.dev_gearsPassed            AS dev_gearsPassed,
  m.prop_pickUp                AS prop_pickUp,
  m.prop_leftPeg               AS prop_leftPeg,
  p.pref_gearLeft              AS pref_leftPeg,
  m.prop_rightPeg              AS prop_rightPeg,
  p.pref_gearRight             AS pref_rightPeg,
  m.prop_centrePeg             AS prop_centrePeg,
  p.pref_gearCentre            AS pref_centrePeg,


  -- shooter
  p.shooterStrategy            AS useShooter,
  m.avg_shooterRating          AS avg_shooterRating,
  p.ballsPerSecond             AS claim_ballsPerSecond,
  p.maxBalls                   AS claim_ballStorage,
  m.prop_specificShootingPlace AS prop_shooterPlace,
  m.whereShootingPlace         AS shootingPlace,

  -- drive
  p.driveType                  AS driveType,
  p.maxSpeed                   AS maxSpeed,
  p.wheelNumber                AS numWheels,
  p.transmission               AS hasTransmission,

  -- auto
  p.auto                       AS useAuto,
  m.prop_autoCross             AS prop_autoCross,
  m.prop_gearUse               AS prop_autoGear,
  m.prop_autoHopper            AS prop_autoHopper,
  p.autoHopper                 AS claim_autoHopper,
  p.autoCross                  AS claim_autoCross,
  p.autoGear                   AS claim_autoGear,
  p.autoHigh                   AS claim_autoHigh,
  p.autoLow                    AS claim_autoLow,

  -- misc strategy & defence
  m.avg_susceptibleDefence     AS avg_susceptibleDefence,
  m.prop_nuclear               AS prop_nuclear,
  p.nuclearStrategy            AS claim_nuclear,
  m.prop_defence               AS prop_defence,
  p.defenceStrategy            AS claim_defence,

  -- comments
  p.comments                   AS pitComments,
  m.comments                   AS matchComments


FROM v_pit_avg AS p
  LEFT JOIN v_match_avg AS m ON p.teamNumber = m.teamNumber

UNION

  SELECT
  -- basic info
  p.teamNumber                 AS teamNumber,
  p.teamName                   AS teamName,
  m.competition                AS competition,
  m.avg_score                  AS avg_score,
  m.dev_score                  AS dev_score,
  m.avg_rating                 AS avg_rating,
  m.dev_rating                 AS dev_rating,
  p.howToWin                   AS overallStrat,

  -- rope & climb
  p.ropeCapable                AS useClimb,
  m.prop_climeRope             AS prop_climbRope,
  m.avg_headRopeTime           AS avg_headRopeTime,
  m.avg_grabRopeTime           AS avg_grabRopeTime,
  p.attachTime + p.climbTime   AS claim_headRopeTime,
  p.climbTime                  AS claim_grabRopeTime,

  -- gears
  p.gearStrategy               AS useGear,
  m.avg_gearsPassed            AS avg_gearsPassed,
  m.dev_gearsPassed            AS dev_gearsPassed,
  m.prop_pickUp                AS prop_pickUp,
  m.prop_leftPeg               AS prop_leftPeg,
  p.pref_gearLeft              AS pref_leftPeg,
  m.prop_rightPeg              AS prop_rightPeg,
  p.pref_gearRight             AS pref_rightPeg,
  m.prop_centrePeg             AS prop_centrePeg,
  p.pref_gearCentre            AS pref_centrePeg,


  -- shooter
  p.shooterStrategy            AS useShooter,
  m.avg_shooterRating          AS avg_shooterRating,
  p.ballsPerSecond             AS claim_ballsPerSecond,
  p.maxBalls                   AS claim_ballStorage,
  m.prop_specificShootingPlace AS prop_shooterPlace,
  m.whereShootingPlace         AS shootingPlace,

  -- drive
  p.driveType                  AS driveType,
  p.maxSpeed                   AS maxSpeed,
  p.wheelNumber                AS numWheels,
  p.transmission               AS hasTransmission,

  -- auto
  p.auto                       AS useAuto,
  m.prop_autoCross             AS prop_autoCross,
  m.prop_gearUse               AS prop_autoGear,
  m.prop_autoHopper            AS prop_autoHopper,
  p.autoHopper                 AS claim_autoHopper,
  p.autoCross                  AS claim_autoCross,
  p.autoGear                   AS claim_autoGear,
  p.autoHigh                   AS claim_autoHigh,
  p.autoLow                    AS claim_autoLow,

  -- misc strategy & defence
  m.avg_susceptibleDefence     AS avg_susceptibleDefence,
  m.prop_nuclear               AS prop_nuclear,
  p.nuclearStrategy            AS claim_nuclear,
  m.prop_defence               AS prop_defence,
  p.defenceStrategy            AS claim_defence,

  -- comments
  p.comments                   AS pitComments,
  m.comments                   AS matchComments


FROM v_pit_avg AS p
  RIGHT JOIN v_match_avg AS m ON p.teamNumber = m.teamNumber

;