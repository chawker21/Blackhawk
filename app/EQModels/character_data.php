<?php

namespace App\EQModels;

use Illuminate\Database\Eloquent\Model;

class character_data extends Model
{
    protected $connection = 'mysql_eq';
    protected $table = 'character_data';

    protected $fillable = ['account_id', 'name', 'last_name', 'title', 'suffix', 'zone_id', 'zone_instance', 'y', 'x', 'z', 'heading', 'gender', 'race', 'class', 'level', 'deity', 'birthday', 'last_login', 'time_played', 'level2', 'anon', 'gm', 'face', 'hair_color', 'hair_style', 'beard', 'beard_color', 'eye_color_1', 'eye_color_2', 'drakkin_heritage', 'drakkin_tattoo', 'drakkin_details', 'ability_time_seconds', 'ability_number', 'ability_time_minutes', 'ability_time_hours', 'exp', 'aa_points_spent', 'aa_exp', 'aa_points', 'group_leadership_exp', 'raid_leadership_exp', 'group_leadership_points', 'raid_leadership_points', 'points', 'cur_hp', 'mana', 'endurance', 'intoxication', 'str', 'sta', 'cha', 'dex', 'int', 'agi', 'wis', 'zone_change_count', 'toxicity', 'hunger_level', 'thirst_level', 'ability_up', 'ldon_points_guk', 'ldon_points_mir', 'ldon_points_mmc', 'ldon_points_ruj', 'ldon_points_tak', 'ldon_points_available', 'tribute_time_remaining', 'career_tribute_points', 'tribute_points', 'tribute_active', 'pvp_status', 'pvp_kills', 'pvp_deaths', 'pvp_current_points', 'pvp_career_points', 'pvp_best_kill_streak', 'pvp_worst_death_streak', 'pvp_current_kill_streak', 'pvp2', 'pvp_type', 'show_helm', 'group_auto_consent', 'raid_auto_consent', 'guild_auto_consent', 'leadership_exp_on', 'RestTimer', 'air_remaining', 'autosplit_enabled', 'lfp', 'lfg', 'mailkey', 'xtargets', 'firstlogon', 'e_aa_effects', 'e_percent_to_aa', 'e_expended_aa_spent', 'aa_points_spent_old', 'aa_points_old', 'e_last_invsnapshot'];

}
